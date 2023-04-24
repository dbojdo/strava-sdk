<?php

namespace Goosfraba\StravaSDK\Dto;

final class NewActivity
{
    private string $name;

    private SportType $sportType;

    private \DateTimeInterface $startDateLocal;

    private int $elapsedTime;

    private ?string $description;

    private ?float $distance;

    private ?bool $trainer;

    private ?bool $commute;

    public function __construct(
        string $name,
        SportType $sportType,
        \DateTimeInterface $startLocalDate,
        int $elapsedTime,
        ?string $description = null,
        ?float $distance = null,
        ?bool $trainer = null,
        ?bool $commute = null
    ) {
        $this->name = $name;
        $this->sportType = $sportType;
        $this->startDateLocal = $startLocalDate;
        $this->elapsedTime = $elapsedTime;
        $this->description = $description;
        $this->distance = $distance;
        $this->trainer = $trainer;
        $this->commute = $commute;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function sportType(): SportType
    {
        return $this->sportType;
    }

    public function startDateLocal(): \DateTimeInterface
    {
        return $this->startDateLocal;
    }

    public function elapsedTime(): int
    {
        return $this->elapsedTime;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function distance(): ?float
    {
        return $this->distance;
    }

    public function trainer(): ?bool
    {
        return $this->trainer;
    }

    public function commute(): ?bool
    {
        return $this->commute;
    }

    public function toFormData(): array
    {
        $data = [
            'name' => $this->name,
            'sport_type' => (string)$this->sportType,
            'start_date_local' => $this->startDateLocal->format(\DateTimeInterface::ISO8601),
            'elapsed_time' => $this->elapsedTime
        ];

        if (null !== $this->description) {
            $data['description'] = $this->description;
        }

        if (null !== $this->distance) {
            $data['distance'] = $this->distance;
        }

        if (null !== $this->trainer) {
            $data['trainer'] = (int)$this->trainer;
        }

        if (null !== $this->commute) {
            $data['commute'] = (int)$this->commute;
        }

        return $data;
    }
}
