<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class DetailedSegmentEffort
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private string $name;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\MetaActivity")
     * @JMS\SerializedName("activity")
     */
    private MetaActivity $activity;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\MetaAthlete")
     * @JMS\SerializedName("athlete")
     */
    private MetaAthlete $athlete;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("elapsed_time")
     */
    private int $elapsedTime;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("moving_time")
     */
    private int $movingTime;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("start_date")
     */
    private \DateTimeInterface $startDate;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("start_date_local")
     */
    private \DateTimeInterface $startDateLocal;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("distance")
     */
    private float $distance;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("start_index")
     */
    private int $startIndex;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("end_index")
     */
    private int $endIndex;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_cadence")
     */
    private float $averageCadence;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("device_watts")
     */
    private bool $deviceWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_watts")
     */
    private float $averageWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_heartrate")
     */
    private float $averageHeartRate;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("max_heartrate")
     */
    private float $maxHearRate;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\SummarySegment")
     * @JMS\SerializedName("segment")
     */
    private SummarySegment $segment;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("pr_rank")
     */
    private ?int $prRank;

    public function hidden(): ?bool
    {
        return $this->hidden;
    }

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("hidden")
     */
    private ?bool $hidden;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\MetaAchievement>")
     * @JMS\SerializedName("achievements")
     */
    private array $achievements;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("kom_rank")
     */
    private ?int $komRank;

    public function name(): string
    {
        return $this->name;
    }

    public function activity(): MetaActivity
    {
        return $this->activity;
    }

    public function athlete(): MetaAthlete
    {
        return $this->athlete;
    }

    public function elapsedTime(): int
    {
        return $this->elapsedTime;
    }

    public function movingTime(): int
    {
        return $this->movingTime;
    }

    public function startDate(): \DateTimeInterface
    {
        return $this->startDate;
    }

    public function startDateLocal(): \DateTimeInterface
    {
        return $this->startDateLocal;
    }

    public function distance(): float
    {
        return $this->distance;
    }

    public function startIndex(): int
    {
        return $this->startIndex;
    }

    public function endIndex(): int
    {
        return $this->endIndex;
    }

    public function averageCadence(): float
    {
        return $this->averageCadence;
    }

    public function isDeviceWatts(): bool
    {
        return $this->deviceWatts;
    }

    public function averageWatts(): float
    {
        return $this->averageWatts;
    }

    public function averageHeartRate(): float
    {
        return $this->averageHeartRate;
    }

    public function maxHearRate(): float
    {
        return $this->maxHearRate;
    }

    public function segment(): SummarySegment
    {
        return $this->segment;
    }

    public function prRank(): int
    {
        return $this->prRank;
    }

    public function achievements(): array
    {
        return $this->achievements;
    }

    public function komRank(): ?int
    {
        return $this->komRank;
    }
}
