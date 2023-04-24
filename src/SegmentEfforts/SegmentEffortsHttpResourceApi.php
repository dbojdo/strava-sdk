<?php

namespace Goosfraba\StravaSDK\SegmentEfforts;

use Goosfraba\StravaSDK\Dto\DetailedSegmentEffort;
use Goosfraba\StravaSDK\Http\AbstractHttpApi;
use Goosfraba\StravaSDK\Http\AbstractHttpResourceApi;

final class SegmentEffortsHttpResourceApi extends AbstractHttpApi implements SegmentEffortsApi
{
    public function listSegmentEfforts(ListSegmentEffortsRequest $listSegmentEffortsRequest): array
    {
        return $this->get(
            sprintf("/segment_efforts?%s", $listSegmentEffortsRequest->toQueryString()),
            sprintf("array<%s>", DetailedSegmentEffort::class)
        );
    }

    public function getSegmentEffort(int $segmentEffortId): ?DetailedSegmentEffort
    {
        return $this->get(
            sprintf("/segment_efforts/%d", $segmentEffortId),
            DetailedSegmentEffort::class
        );
    }
}
