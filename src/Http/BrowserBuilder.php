<?php

namespace Goosfraba\StravaSDK\Http;

use Buzz\Browser;
use Buzz\Client\Curl;
use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Http\Buzz\AuthMiddleware;
use Goosfraba\StravaSDK\Http\Buzz\BaseUrlMiddleware;
use Nyholm\Psr7\Factory\Psr17Factory;

final class BrowserBuilder
{
    private ?string $baseUrl = null;
    private ?AuthToken $token = null;

    public static function create(): self
    {
        return new self();
    }

    public function build(): Browser
    {
        $browser = new Browser(
            new Curl(
                $psr17Factory = new Psr17Factory()
            ),
            $psr17Factory
        );

        if ($this->baseUrl) {
            $browser->addMiddleware(BaseUrlMiddleware::create($this->baseUrl));
        }

        if ($this->token) {
            $browser->addMiddleware(AuthMiddleware::create($this->token));
        }

        return $browser;
    }

    public function withBaseUrl(string $baseUrl): BrowserBuilder
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    public function withAuth(AuthToken $token): BrowserBuilder
    {
        $this->token = $token;

        return $this;
    }
}
