<?php

namespace Goosfraba\StravaSDK\Http\Buzz;

use Buzz\Browser;
use Goosfraba\StravaSDK\Auth\AuthApi;
use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Http\BrowserBuilder;
use Goosfraba\StravaSDK\StravaApiBaseUrl;

final class AuthenticatedBrowserFactory implements BrowserFactory
{
    private const DEFAULT_TOKEN_REFRESH_MINUTES = 10;

    private AuthApi $oAuthApi;

    private AuthToken $oAuthToken;

    private int $tokenRefreshMinutes;

    private ?Browser $browser = null;

    public function __construct(
        AuthApi $oAuthApi,
        AuthToken $oAuthToken,
        ?int $tokenRefreshMinutes = null
    ) {
        $this->oAuthApi = $oAuthApi;
        $this->oAuthToken = $oAuthToken;
        $this->tokenRefreshMinutes = $tokenRefreshMinutes ?? self::DEFAULT_TOKEN_REFRESH_MINUTES;
    }

    public function create(): Browser
    {
        if ($this->oAuthToken->expiresIn($this->tokenRefreshMinutes)) {
            $this->oAuthToken = $this->oAuthApi->refreshToken($this->oAuthToken)->token();
            $this->browser = null;
        }

        if (!$this->browser) {
            $this->browser = BrowserBuilder::create()
                ->withBaseUrl(StravaApiBaseUrl::create()->apiBaseUrl())
                ->withAuth($this->oAuthToken)
                ->build();
        }

        return $this->browser;
    }
}
