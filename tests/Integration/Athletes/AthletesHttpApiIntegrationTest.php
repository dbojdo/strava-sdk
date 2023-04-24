<?php

namespace Goosfraba\StravaSDK\Integration\Athletes;

use Goosfraba\StravaSDK\Athletes\AthletesHttpResourceApi;
use Goosfraba\StravaSDK\Dto\DetailedAthlete;
use Goosfraba\StravaSDK\Integration\AbstractHttpApiIntegrationTest;

/**
 * @group integration
 */
class AthletesHttpApiIntegrationTest extends AbstractHttpApiIntegrationTest
{
    private AthletesHttpResourceApi $api;

    protected function setUp(): void
    {
        $this->api = $this->apiFactory()->athletesApi();
    }

    /**
     * @test
     */
    public function itGetsAuthenticatedAthlete(): void
    {
        $this->assertInstanceOf(
            DetailedAthlete::class,
            $this->api->getAuthenticatedAthlete()
        );
    }
}
