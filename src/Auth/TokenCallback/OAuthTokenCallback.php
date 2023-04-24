<?php

namespace Goosfraba\StravaSDK\Auth\TokenCallback;

use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Auth\AuthorisationResponse;

interface OAuthTokenCallback
{
    /**
     * Called after the app is authorised on the Strava account
     *
     * @param string $code the authorisation code
     * @param AuthorisationResponse $tokenResponse the response with token
     */
    public function onAuthorise(string $code, AuthorisationResponse $tokenResponse): void;

    public function onDeAuthorise(AuthToken $token): void;

    public function onTokenRefresh(AuthToken $newToken, AuthToken $previousToken): void;
}
