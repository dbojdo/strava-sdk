<?php

namespace Goosfraba\StravaSDK\Integration\Token;

use Goosfraba\StravaSDK\Auth\AuthorisationResponse;
use Goosfraba\StravaSDK\Auth\AuthToken;
use Goosfraba\StravaSDK\Auth\TokenCallback\OAuthTokenCallback;

final class AuthTokenTestsCallback implements OAuthTokenCallback
{
    private AuthStore $tokenStore;

    public function __construct(AuthStore $tokenStore)
    {
        $this->tokenStore = $tokenStore;
    }

    public function onAuthorise(string $code, AuthorisationResponse $tokenResponse): void
    {
        $this->tokenStore->saveToken($tokenResponse->token());
        $this->tokenStore->unsetAuthCode();
    }

    public function onDeAuthorise(AuthToken $token): void
    {
        $this->tokenStore->saveToken(AuthToken::emptyToken());
    }

    public function onTokenRefresh(AuthToken $newToken, AuthToken $previousToken): void
    {
        $this->tokenStore->saveToken($newToken);
    }
}
