<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class Split
{
    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("distance")
     */
    private ?float $distance;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("elapsed_time")
     */
    private ?int $elapsedTime;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("elevation_difference")
     */
    private ?float $elevationDifference;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("moving_time")
     */
    private ?int $movingTime;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("split")
     */
    private ?int $split;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_speed")
     */
    private ?float $averageSpeed;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_grade_adjusted_speed")
     */
    private ?float $averageGradeAdjustedSpeed;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_heartrate")
     */
    private ?float $averageHeartRate;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("pace_zone")
     */
    private ?int $paceZone;

    public function distance(): ?float
    {
        return $this->distance;
    }

    public function elapsedTime(): ?int
    {
        return $this->elapsedTime;
    }

    public function elevationDifference(): ?float
    {
        return $this->elevationDifference;
    }

    public function movingTime(): ?int
    {
        return $this->movingTime;
    }

    public function averageSpeed(): ?float
    {
        return $this->averageSpeed;
    }

    public function averageGradeAdjustedSpeed(): ?float
    {
        return $this->averageGradeAdjustedSpeed;
    }

    public function averageHeartRate(): ?float
    {
        return $this->averageHeartRate;
    }

    public function paceZone(): ?int
    {
        return $this->paceZone;
    }
}
