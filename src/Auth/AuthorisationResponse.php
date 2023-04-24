<?php

namespace Goosfraba\StravaSDK\Auth;

use JMS\Serializer\Annotation as JMS;

final class AuthorisationResponse extends AbstractTokenResponse
{
    /**
     * @JMS\Type("Goosfraba\StravaSDK\Auth\AthleteDetails")
     * @JMS\SerializedName("athlete")
     */
    private ?AthleteDetails $athlete = null;

    public function athlete(): ?AthleteDetails
    {
        return $this->athlete;
    }
}
