<?php

namespace Goosfraba\StravaSDK\Auth;

use Goosfraba\StravaSDK\Auth\TokenCallback\OAuthTokenCallback;
use Goosfraba\StravaSDK\Http\AbstractHttpApi;
use Goosfraba\StravaSDK\Http\Buzz\BrowserFactory;
use JMS\Serializer\SerializerInterface;

/**
 * The HTTP implementation of the AuthApi
 */
final class AuthHttpApi extends AbstractHttpApi implements AuthApi
{
    private ClientCredentials $credentials;
    private OAuthTokenCallback $tokenCallback;

    public function __construct(
        ClientCredentials $credentials,
        OAuthTokenCallback $tokenRefreshCallback,
        BrowserFactory $browserFactory,
        ?SerializerInterface $serializer = null
    ) {
        parent::__construct($browserFactory, $serializer);

        $this->credentials = $credentials;
        $this->tokenCallback = $tokenRefreshCallback;
    }

    /**
     * @inheritDoc
     */
    public function authorise(string $code): AuthorisationResponse
    {
        /** @var AuthorisationResponse $response */
        $response = $this->post(
            sprintf(
                '/oauth/token?%s',
                $this->buildQueryParams([
                    'client_id' => $this->credentials->clientId(),
                    'client_secret' => $this->credentials->clientSecret(),
                    'grant_type' => 'authorization_code',
                    'code' => $code
                ])
            ),
            null,
            AuthorisationResponse::class
        );

        $this->tokenCallback->onAuthorise($code, $response);

        return $response;
    }

    /**
     * @inheritDoc
     */
    public function deAuthorize(AuthToken $token): void
    {
        $token = $this->refreshToken($token)->token();

        $this->post(
            sprintf(
                '/oauth/deauthorize?%s',
                $this->buildQueryParams([
                    'access_token' => $token->accessToken()
                ])
            )
        );

        $this->tokenCallback->onDeAuthorise($token);
    }

    /**
     * @inheritDoc
     */
    public function refreshToken(AuthToken $token): TokenRefreshResponse
    {
        $response = $this->post(
            sprintf(
                '/oauth/token?%s',
                $this->buildQueryParams([
                    'client_id' => $this->credentials->clientId(),
                    'client_secret' => $this->credentials->clientSecret(),
                    'grant_type' => 'refresh_token',
                    'refresh_token' => $token->refreshToken()
                ])
            ),
            null,
            TokenRefreshResponse::class
        );

        $this->tokenCallback->onTokenRefresh($response->token(), $token);

        return $response;
    }
}
