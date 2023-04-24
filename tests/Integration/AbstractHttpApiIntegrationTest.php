<?php

namespace Goosfraba\StravaSDK\Integration;

use Goosfraba\StravaSDK\ApiFactory;
use Goosfraba\StravaSDK\Auth\AuthApi;
use Goosfraba\StravaSDK\Auth\AuthApiFactory;
use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Http\Buzz\AuthenticatedBrowserFactory;
use Goosfraba\StravaSDK\Integration\Token\AuthStore;
use Goosfraba\StravaSDK\Integration\Token\AuthTokenTestsCallback;
use PHPUnit\Framework\TestCase;

abstract class AbstractHttpApiIntegrationTest extends TestCase
{
    use ClientCredentialsTrait;

    private ?AuthStore $authStore = null;
    private ?AuthApi $authApi = null;
    private ?ApiFactory $apiFactory = null;

    protected function authApi(): AuthApi
    {
        if (!$this->authApi) {
            $factory = new AuthApiFactory(new AuthTokenTestsCallback($this->tokenStore()));
            $this->authApi = $factory->create($this->clientCredentials());
        }

        return $this->authApi;
    }

    protected function authCode(): ?string
    {
        return $this->authStore->getAuthCode();
    }

    protected function oAuthToken(): AuthToken
    {
        return new AuthToken("bull", "shit", 12323232232);
        return $this->tokenStore()->getToken();
    }

    protected function segmentId(): int
    {
        $segmentId = getenv("SEGMENT_ID");
        if (!$segmentId) {
            $this->markTestSkipped("SEGMENT_ID must be set.");
        }

        return (int)$segmentId;
    }

    protected function segmentEffortId(): int
    {
        $segmentEffortId = getenv("SEGMENT_EFFORT_ID");
        if (!$segmentEffortId) {
            $this->markTestSkipped("SEGMENT_EFFORT_ID must be set.");
        }

        return (int)$segmentEffortId;
    }

    protected function activityId(): int
    {
        $segmentEffortId = getenv("ACTIVITY_ID");
        if (!$segmentEffortId) {
            $this->markTestSkipped("ACTIVITY_ID must be set.");
        }

        return (int)$segmentEffortId;
    }

    private function tokenStore(): AuthStore
    {

        if (!$this->authStore) {
            $pathName = __DIR__.'/.storage';
            if (!is_dir($pathName)) {
                throw new \RuntimeException(
                    sprintf("Could not find the auth store path of \"%s\"", $pathName)
                );
            }
            $this->authStore = new AuthStore($pathName);
        }

        return $this->authStore;
    }

    protected function apiFactory(): ApiFactory
    {
        if (!$this->apiFactory) {
            $this->apiFactory = new ApiFactory(
                new AuthenticatedBrowserFactory($this->authApi(), $this->oAuthToken())
            );
        }

        return $this->apiFactory;
    }
}
