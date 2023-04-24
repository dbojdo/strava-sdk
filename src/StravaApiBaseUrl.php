<?php

namespace Goosfraba\StravaSDK;

/**
 * Represents the base URL to the Strava API
 */
final class StravaApiBaseUrl
{
    private const DEFAULT_BASE_URL = "https://www.strava.com";

    private string $baseUrl = self::DEFAULT_BASE_URL;

    private static ?StravaApiBaseUrl $instance = null;

    /**
     * Creates an instance of default base URL
     *
     * @return StravaApiBaseUrl the Strava API base URL
     */
    public static function create(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function authBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function apiBaseUrl(): string
    {
        return $this->baseUrl . '/api/v3';
    }
}
