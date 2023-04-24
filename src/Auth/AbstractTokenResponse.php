<?php

namespace Goosfraba\StravaSDK\Auth;

use JMS\Serializer\Annotation as JMS;

abstract class AbstractTokenResponse
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("token_type")
     */
    private string $tokenType;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("expires_at")
     */
    private int $expiresAt;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("expires_in")
     */
    private int $expiresIn;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("refresh_token")
     */
    private string $refreshToken;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("access_token")
     */
    private string $accessToken;

    public function tokenType(): string
    {
        return $this->tokenType;
    }

    public function expiresAt(): int
    {
        return $this->expiresAt;
    }

    public function expiresIn(): int
    {
        return $this->expiresIn;
    }

    public function refreshToken(): int
    {
        return $this->refreshToken;
    }

    public function accessToken(): string
    {
        return $this->accessToken;
    }

    public function token(): AuthToken
    {
        return new AuthToken($this->refreshToken, $this->accessToken, $this->expiresAt);
    }
}
