<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class SummaryAthlete
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("firstname")
     */
    private ?string $firstName;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("lastname")
     */
    private ?string $lastName;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile_medium")
     */
    private ?string $profileMedium;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile")
     */
    private ?string $profile;

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
     * @JMS\Type("string")
     * @JMS\SerializedName("sex")
     */
    private ?string $sex;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("premium")
     */
    private ?bool $premium;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("summit")
     */
    private ?bool $summit;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("created_at")
     */
    private ?\DateTimeInterface $createdAt;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("updated_at")
     */
    private ?\DateTimeInterface $updatedAt;

    public function firstName(): ?string
    {
        return $this->firstName;
    }

    public function lastName(): ?string
    {
        return $this->lastName;
    }

    public function profileMedium(): ?string
    {
        return $this->profileMedium;
    }

    public function profile(): ?string
    {
        return $this->profile;
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

    public function sex(): ?string
    {
        return $this->sex;
    }

    public function premium(): ?bool
    {
        return $this->premium;
    }

    public function summit(): ?bool
    {
        return $this->summit;
    }

    public function createdAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function updatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }
}
