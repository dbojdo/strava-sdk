<?php

namespace Goosfraba\StravaSDK;

use Goosfraba\StravaSDK\Activities\ActivitiesApi;
use Goosfraba\StravaSDK\Activities\ActivitiesHttpResourceApi;
use Goosfraba\StravaSDK\Athletes\AthletesApi;
use Goosfraba\StravaSDK\Athletes\AthletesHttpResourceApi;
use Goosfraba\StravaSDK\Http\Buzz\BrowserFactory;
use Goosfraba\StravaSDK\SegmentEfforts\SegmentEffortsApi;
use Goosfraba\StravaSDK\SegmentEfforts\SegmentEffortsHttpResourceApi;

final class ApiFactory
{
    private BrowserFactory $browserFactory;

    public function __construct(BrowserFactory $browserFactory)
    {
        $this->browserFactory = $browserFactory;
    }

    public function athletesApi(): AthletesApi
    {
        return new AthletesHttpResourceApi($this->browserFactory);
    }

    public function segmentEffortsApi(): SegmentEffortsApi
    {
        return new SegmentEffortsHttpResourceApi($this->browserFactory);
    }

    public function activitiesApi(): ActivitiesApi
    {
        return new ActivitiesHttpResourceApi($this->browserFactory);
    }
}
