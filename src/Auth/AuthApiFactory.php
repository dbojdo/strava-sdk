<?php

namespace Goosfraba\StravaSDK\Auth;

use Goosfraba\StravaSDK\Auth\TokenCallback\OAuthTokenCallback;
use Goosfraba\StravaSDK\Auth\TokenCallback\OAuthTokenVoidCallback;
use Goosfraba\StravaSDK\Http\BrowserBuilder;
use Goosfraba\StravaSDK\Http\Buzz\StaticBrowserFactory;
use Goosfraba\StravaSDK\StravaApiBaseUrl;
use JMS\Serializer\SerializerBuilder;

final class AuthApiFactory
{
    private OAuthTokenCallback $tokenRefreshCallback;

    public function __construct(?OAuthTokenCallback $refreshCallback = null)
    {
        $this->tokenRefreshCallback = $refreshCallback ?? new OAuthTokenVoidCallback();
    }

    public function create(ClientCredentials $credentials): AuthHttpApi
    {
        return new AuthHttpApi(
            $credentials,
            $this->tokenRefreshCallback,
            new StaticBrowserFactory(
                BrowserBuilder::create()
                    ->withBaseUrl(StravaApiBaseUrl::create()->authBaseUrl())
                    ->build()
            ),
            SerializerBuilder::create()->build()
        );
    }
}
