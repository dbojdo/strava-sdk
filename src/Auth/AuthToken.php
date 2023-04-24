<?php

namespace Goosfraba\StravaSDK\Auth;

final class AuthToken
{
    private string $refreshToken;
    private string $accessToken;
    private int $expiresAt;


    public function __construct(string $refreshToken, string $accessToken, int $expiresAt)
    {
        $this->refreshToken = $refreshToken;
        $this->accessToken = $accessToken;
        $this->expiresAt = $expiresAt;
    }

    public static function emptyToken(): self
    {
        return new self("", "", 0);
    }

    public function accessToken(): string
    {
        return $this->accessToken;
    }

    public function refreshToken(): string
    {
        return $this->refreshToken;
    }

    public function expiresAt(): int
    {
        return $this->expiresAt;
    }

    public function expiresIn(int $minutes): bool
    {
        return date_create(sprintf('now + %d minutes', $minutes)) >= $this->expiresAt;
    }
}
