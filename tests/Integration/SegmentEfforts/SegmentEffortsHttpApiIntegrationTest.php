<?php

namespace Goosfraba\StravaSDK\Integration\SegmentEfforts;

use Goosfraba\StravaSDK\Dto\DetailedSegmentEffort;
use Goosfraba\StravaSDK\Integration\AbstractHttpApiIntegrationTest;
use Goosfraba\StravaSDK\SegmentEfforts\ListSegmentEffortsRequest;
use Goosfraba\StravaSDK\SegmentEfforts\SegmentEffortsHttpResourceApi;

class SegmentEffortsHttpApiIntegrationTest extends AbstractHttpApiIntegrationTest
{
    private SegmentEffortsHttpResourceApi $api;

    protected function setUp(): void
    {
        $this->api = $this->apiFactory()->segmentEffortsApi();
    }

    /**
     * @test
     */
    public function itListsSegmentEfforts(): void
    {
        $request = new ListSegmentEffortsRequest(
            $this->segmentId(),
            null,
            null,
            5
        );

        $efforts = $this->api->listSegmentEfforts($request);
        $this->assertContainsOnly(DetailedSegmentEffort::class, $efforts);
    }

    /**
     * @test
     */
    public function itGetsSegmentEffort(): void
    {
        $this->assertInstanceOf(
            DetailedSegmentEffort::class,
            $this->api->getSegmentEffort($this->segmentEffortId())
        );
    }
}
