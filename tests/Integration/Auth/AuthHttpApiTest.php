<?php

namespace Goosfraba\StravaSDK\Integration\Auth;

use Goosfraba\StravaSDK\Auth\AuthHttpApi;
use Goosfraba\StravaSDK\Auth\AuthorisationResponse;
use Goosfraba\StravaSDK\Auth\TokenRefreshResponse;
use Goosfraba\StravaSDK\Http\GenericApiException;
use Goosfraba\StravaSDK\Integration\AbstractHttpApiIntegrationTest;

class AuthHttpApiTest extends AbstractHttpApiIntegrationTest
{
    private AuthHttpApi $api;

    protected function setUp(): void
    {
        $this->api = $this->authApi();
    }

    /**
     * @test
     */
    public function itAuthenticatesWithClientCredentialsAndCode(): void
    {
        $code = $this->authCode();
        if (!$code) {
            $this->markTestSkipped("The auth code is not set up under \"tests/.storage/.code.json\".");
        }

        $authorisationResponse = $this->api->authorise($code);
        $this->assertInstanceOf(AuthorisationResponse::class, $authorisationResponse);
    }

    /**
     * @test
     */
    public function itThrowsExceptionOnAuthenticationError(): void
    {
        $this->expectException(GenericApiException::class);
        $this->api->authorise("invalid-code");
    }

    /**
     * @test
     */
    public function itRefreshesToken(): void
    {
        $this->assertInstanceOf(
            TokenRefreshResponse::class,
            $this->api->refreshToken($this->oAuthToken())
        );
    }
}
