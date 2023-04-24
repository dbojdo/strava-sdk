<?php

namespace Goosfraba\StravaSDK\Athletes;

use Goosfraba\StravaSDK\Dto\DetailedAthlete;
use Goosfraba\StravaSDK\Http\AbstractHttpApi;
use Nyholm\Psr7\Request;

final class AthletesHttpResourceApi extends AbstractHttpApi implements AthletesApi
{
    /**
     * @inheritDoc
     */
    public function getAuthenticatedAthlete(): DetailedAthlete
    {
        return $this->executeRequest(new Request("GET", "/athlete"), DetailedAthlete::class);
        return $this->get();
    }
}
