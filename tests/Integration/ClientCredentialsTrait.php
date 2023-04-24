<?php

namespace Goosfraba\StravaSDK\Integration;

use Goosfraba\StravaSDK\Auth\ClientCredentials;

trait ClientCredentialsTrait
{
    private ?ClientCredentials $clientCredentials = null;

    protected function clientCredentials(): ClientCredentials
    {
        if (!$this->clientCredentials) {
            $clientId = getenv("CLIENT_ID");
            $clientSecret = getenv("CLIENT_SECRET");
            if (!($clientId && $clientSecret)) {
                throw new \RuntimeException("CLIENT_ID and CLIENT_SECRET must be set.");
            }
            $this->clientCredentials = new ClientCredentials($clientId, $clientSecret);
        }

        return $this->clientCredentials;
    }
}
