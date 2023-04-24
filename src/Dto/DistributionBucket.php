<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class DistributionBucket
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("min")
     */
    private ?int $min;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("max")
     */
    private ?int $max;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("time")
     */
    private ?int $time;

    public function min(): ?int
    {
        return $this->min;
    }

    public function max(): ?int
    {
        return $this->max;
    }

    public function time(): ?int
    {
        return $this->time;
    }
}
