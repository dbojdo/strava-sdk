<?php

namespace Goosfraba\StravaSDK\Dto;

final class LatLng
{
    private float $lat;

    private float $lng;

    public function __construct(float $lat, float $lng)
    {
        $this->lat = $lat;
        $this->lng = $lng;
    }

    public function lat(): float
    {
        return $this->lat;
    }

    public function lng(): float
    {
        return $this->lng;
    }

    public static function fromArray(array $latLng): self
    {
        @list($lat, $lng) = $latLng;

        return new self((float)$lat, (float)$lng);
    }
}
