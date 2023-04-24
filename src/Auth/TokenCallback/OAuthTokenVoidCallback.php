<?php

namespace Goosfraba\StravaSDK\Auth\TokenCallback;

use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Auth\AuthorisationResponse;

final class OAuthTokenVoidCallback implements OAuthTokenCallback
{
    public function onAuthorise(string $code, AuthorisationResponse $tokenResponse): void
    {
    }

    public function onDeAuthorise(AuthToken $token): void
    {
    }

    public function onTokenRefresh(AuthToken $newToken, AuthToken $previousToken): void
    {
    }
}
