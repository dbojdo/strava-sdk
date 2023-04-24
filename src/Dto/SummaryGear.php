<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class SummaryGear
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("id")
     */
    private ?string $id = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("resource_state")
     */
    private ?int $resourceState = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("primary")
     */
    private ?bool $primary = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("nickname")
     */
    private ?string $nickname = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("retired")
     */
    private ?bool $retired = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("distance")
     */
    private ?int $distance = null;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("converted_distance")
     */
    private ?float $convertedDistance = null;

    public function id(): ?string
    {
        return $this->id;
    }

    public function resourceState(): ?int
    {
        return $this->resourceState;
    }

    public function primary(): ?bool
    {
        return $this->primary;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function nickname(): ?string
    {
        return $this->nickname;
    }

    public function retired(): ?bool
    {
        return $this->retired;
    }

    public function distance(): ?int
    {
        return $this->distance;
    }

    public function convertedDistance(): ?float
    {
        return $this->convertedDistance;
    }
}
