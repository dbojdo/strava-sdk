<?php

namespace Goosfraba\StravaSDK\SegmentEfforts;

use Goosfraba\StravaSDK\Dto\DetailedSegmentEffort;

interface SegmentEffortsApi
{
    public function listSegmentEfforts(ListSegmentEffortsRequest $listSegmentEffortsRequest): array;

    public function getSegmentEffort(int $segmentEffortId): ?DetailedSegmentEffort;
}

