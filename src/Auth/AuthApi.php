<?php

namespace Goosfraba\StravaSDK\Auth;

/**
 * Provides the authorisation related operations for the application
 */
interface AuthApi
{
    /**
     * It authorises the app on the user's Strava account using the authorisation code
     *
     * @param string $code the authorisation code
     * @return AuthorisationResponse the successful authorisation response
     */
    public function authorise(string $code): AuthorisationResponse;

    /**
     * It de-authorises the app from the user's Stava account
     *
     * @param AuthToken $token the token of the account to be de-authorised
     */
    public function deAuthorize(AuthToken $token): void;

    /**
     * It refreshes the auth token
     *
     * @param AuthToken $token the token to be refreshed
     * @return TokenRefreshResponse the token refresh response
     */
    public function refreshToken(AuthToken $token): TokenRefreshResponse;
}
