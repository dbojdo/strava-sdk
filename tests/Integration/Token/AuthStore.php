<?php

namespace Goosfraba\StravaSDK\Integration\Token;

use Goosfraba\StravaSDK\Auth\AuthToken;

final class AuthStore
{
    private string $directoryName;

    public function __construct(string $directoryName)
    {
        $this->directoryName = $directoryName;
    }

    public function getToken(): ?AuthToken
    {
        $arToken = @json_decode(file_get_contents($this->tokenFilename()), true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new \RuntimeException("Could not decode the token.");
        }

        return new AuthToken($arToken['refresh_token'], $arToken['access_token'], $arToken['expires_at']);
    }

    public function saveToken(AuthToken $token): void
    {
        $result = @file_put_contents(
            $this->tokenFilename(),
            json_encode([
                'refresh_token' => $token->refreshToken(),
                'access_token' => $token->accessToken(),
                'expires_at' => $token->expiresAt(),
                'updated_at' => date_create()->format("Y-m-d H:i:s")
            ])
        );

        if ($result === false) {
            throw new \RuntimeException("Could not save the token.");
        }
    }

    public function getAuthCode(): ?string
    {
        $filename = $this->authCodeFilename();
        if (!is_file($filename)) {
            return null;
        }

        return trim((string)file_get_contents($this->authCodeFilename())) ?: null;
    }

    public function unsetAuthCode(): void
    {
        $filename = $this->authCodeFilename();
        if (!is_file($filename)) {
            return;
        }
        file_put_contents($filename, "");
    }

    private function tokenFilename(): string
    {
        return $this->directoryName . '/.token.json';
    }

    private function authCodeFilename(): string
    {
        return $this->directoryName . '/.code.txt';
    }
}
