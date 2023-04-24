<?php

namespace Goosfraba\StravaSDK\Unit\Access;

use Goosfraba\StravaSDK\Access\RequestAccessUrl;
use Goosfraba\StravaSDK\Access\Scope;
use Goosfraba\StravaSDK\Integration\ClientCredentialsTrait;
use PHPUnit\Framework\TestCase;

class RequestAccessUrlTest extends TestCase
{
    use ClientCredentialsTrait;

    /**
     * @test
     */
    public function itCreatesRequestAccessUrl(): void
    {
        $url = new RequestAccessUrl(
            $this->clientCredentials()->clientId(),
            "http://localhost/strava/access-granted",
            [
                Scope::general(true),
                Scope::profile(true),
                Scope::activity(true, true)
            ]
        );

        $this->assertNotEmpty((string)$url);
    }
}
