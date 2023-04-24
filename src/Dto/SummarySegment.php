<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class SummarySegment
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("activity_type")
     */
    private ?string $activityType;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("distance")
     */
    private ?float $distance;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_grade")
     */
    private ?float $averageGrade;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("maximum_grade")
     */
    private ?float $maximumGrade;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("elevation_high")
     */
    private ?float $elevationHigh;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("elevation_low")
     */
    private ?float $elevationLow;

    /**
     * @JMS\Type("array<float>")
     * @JMS\SerializedName("start_latlng")
     */
    private ?array $startLatLng;

    /**
     * @JMS\Type("array<float>")
     * @JMS\SerializedName("end_latlng")
     */
    private ?array $endLatLng;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("elevation_profile")
     */
    private ?string $elevationProfile;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("climb_category")
     */
    private ?int $climbCategory;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    private ?string $city;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("state")
     */
    private ?string $state;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("country")
     */
    private ?string $country;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("private")
     */
    private ?bool $private;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("hazardous")
     */
    private ?bool $hazardous;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("starred")
     */
    private ?bool $starred;

    public function name(): ?string
    {
        return $this->name;
    }

    public function activityType(): ?string
    {
        return $this->activityType;
    }

    public function distance(): ?float
    {
        return $this->distance;
    }

    public function averageGrade(): ?float
    {
        return $this->averageGrade;
    }

    public function maximumGrade(): ?float
    {
        return $this->maximumGrade;
    }

    public function elevationHigh(): ?float
    {
        return $this->elevationHigh;
    }

    public function elevationLow(): ?float
    {
        return $this->elevationLow;
    }

    public function startLatLng(): ?array
    {
        return $this->startLatLng;
    }

    public function endLatLng(): ?array
    {
        return $this->endLatLng;
    }

    public function elevationProfile(): ?string
    {
        return $this->elevationProfile;
    }

    public function climbCategory(): ?int
    {
        return $this->climbCategory;
    }

    public function city(): ?string
    {
        return $this->city;
    }

    public function state(): ?string
    {
        return $this->state;
    }

    public function country(): ?string
    {
        return $this->country;
    }

    public function private(): ?bool
    {
        return $this->private;
    }

    public function hazardous(): ?bool
    {
        return $this->hazardous;
    }

    public function starred(): ?bool
    {
        return $this->starred;
    }
}
