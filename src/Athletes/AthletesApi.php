<?php

namespace Goosfraba\StravaSDK\Athletes;

use Goosfraba\StravaSDK\Dto\DetailedAthlete;

interface AthletesApi
{
    /**
     * Gets the authenticated athlete
     *
     * @return DetailedAthlete the athlete details
     */
    public function getAuthenticatedAthlete(): DetailedAthlete;
}
