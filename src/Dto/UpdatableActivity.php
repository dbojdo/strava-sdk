<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class UpdatableActivity
{
    /**
     * @JMS\Exclude
     */
    private int $id;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("commute")
     */
    private ?bool $commute;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("trainer")
     */
    private ?bool $trainer;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("hide_from_home")
     */
    private ?bool $hideFromHome;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    private ?string $description;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sport_type")
     */
    private ?string $sportType;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gear_id")
     */
    private ?string $gearId;

    public function __construct(
        int $id,
        ?bool $commute = null,
        ?bool $trainer = null,
        ?bool $hideFromHome = null,
        ?string $description = null,
        ?string $name = null,
        ?string $sportType = null,
        ?string $gearId = null
    ) {
        $this->id = $id;
        $this->commute = $commute;
        $this->trainer = $trainer;
        $this->hideFromHome = $hideFromHome;
        $this->description = $description;
        $this->name = $name;
        $this->sportType = $sportType;
        $this->gearId = $gearId;
    }

    public static function create(
        int $id,
        ?bool $commute = null,
        ?bool $trainer = null,
        ?bool $hideFromHome = null,
        ?string $description = null,
        ?string $name = null,
        ?string $sportType = null,
        ?string $gearId = null
    ): self
    {
        return new self($id, $commute, $trainer, $hideFromHome, $description, $name, $sportType, $gearId);
    }

    public function id(): int
    {
        return $this->id;
    }

    public function commute(): ?bool
    {
        return $this->commute;
    }

    public function withCommute(?bool $commute): self
    {
        return new self($this->id, $commute, $this->trainer, $this->hideFromHome, $this->description, $this->name, $this->sportType, $this->gearId);
    }

    public function trainer(): ?bool
    {
        return $this->trainer;
    }

    public function withTrainer(?bool $trainer): self
    {
        return new self($this->id, $this->commute, $trainer, $this->hideFromHome, $this->description, $this->name, $this->sportType, $this->gearId);
    }

    public function hideFromHome(): ?bool
    {
        return $this->hideFromHome;
    }

    public function withHideFromHome(?bool $hideFromHome): self
    {
        return new self($this->id, $this->commute, $this->trainer, $hideFromHome, $this->description, $this->name, $this->sportType, $this->gearId);
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function withDescription(?string $description): self
    {
        return new self($this->id, $this->commute, $this->trainer, $this->hideFromHome, $description, $this->name, $this->sportType, $this->gearId);
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function withName(?string $name): self
    {
        return new self($this->id, $this->commute, $this->trainer, $this->hideFromHome, $this->description, $name, $this->sportType, $this->gearId);
    }

    public function sportType(): ?SportType
    {
        return SportType::tryParse($this->sportType);
    }

    public function withSportType(?string $sportType): self
    {
        return new self($this->id, $this->commute, $this->trainer, $this->hideFromHome, $this->description, $this->name, $sportType, $this->gearId);
    }

    public function gearId(): ?string
    {
        return $this->gearId;
    }

    public function withGearId(?string $gearId): self
    {
        return new self($this->id, $this->commute, $this->trainer, $this->hideFromHome, $this->description, $this->name, $this->sportType, $gearId);
    }
}
