<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class Lap
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name = null;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\MetaActivity")
     * @JMS\SerializedName("activity")
     */
    private ?MetaActivity $activity = null;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\MetaAthlete")
     * @JMS\SerializedName("athlete")
     */
    private ?MetaAthlete $athlete;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("elapsed_time")
     */
    private ?int $elapsedTime;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("moving_time")
     */
    private ?int $movingTime;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("start_date")
     */
    private ?\DateTimeInterface $startDate;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("start_date_local")
     */
    private ?\DateTimeInterface $startDateLocal;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("distance")
     */
    private ?float $distance;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("start_index")
     */
    private ?int $startIndex;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("end_index")
     */
    private ?int $endIndex;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("total_elevation_gain")
     */
    private ?float $totalElevationGain;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_speed")
     */
    private ?float $averageSpeed;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("max_speed")
     */
    private ?float $maxSpeed;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_cadence")
     */
    private ?float $averageCadence;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("device_watts")
     */
    private ?bool $deviceWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_watts")
     */
    private ?float $averageWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_heartrate")
     */
    private ?float $averageHeartRate;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("max_heartrate")
     */
    private ?float $maxHeartRate;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("lap_index")
     */
    private ?int $lapIndex;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("split")
     */
    private ?int $split;

    public function name(): ?string
    {
        return $this->name;
    }

    public function activity(): ?MetaActivity
    {
        return $this->activity;
    }

    public function athlete(): ?MetaAthlete
    {
        return $this->athlete;
    }

    public function elapsedTime(): ?int
    {
        return $this->elapsedTime;
    }

    public function movingTime(): ?int
    {
        return $this->movingTime;
    }

    public function startDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function startDateLocal(): ?\DateTimeInterface
    {
        return $this->startDateLocal;
    }

    public function distance(): ?float
    {
        return $this->distance;
    }

    public function startIndex(): ?int
    {
        return $this->startIndex;
    }

    public function endIndex(): ?int
    {
        return $this->endIndex;
    }

    public function totalElevationGain(): ?float
    {
        return $this->totalElevationGain;
    }

    public function averageSpeed(): ?float
    {
        return $this->averageSpeed;
    }

    public function maxSpeed(): ?float
    {
        return $this->maxSpeed;
    }

    public function averageCadence(): ?float
    {
        return $this->averageCadence;
    }

    public function deviceWatts(): ?bool
    {
        return $this->deviceWatts;
    }

    public function averageWatts(): ?float
    {
        return $this->averageWatts;
    }

    public function averageHeartRate(): ?float
    {
        return $this->averageHeartRate;
    }

    public function maxHeartRate(): ?float
    {
        return $this->maxHeartRate;
    }

    public function lapIndex(): ?int
    {
        return $this->lapIndex;
    }

    public function split(): ?int
    {
        return $this->split;
    }
}
