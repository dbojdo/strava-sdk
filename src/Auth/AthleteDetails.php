<?php

namespace Goosfraba\StravaSDK\Auth;

use JMS\Serializer\Annotation as JMS;

final class AthleteDetails
{


    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    private ?int $id;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("username")
     */
    private ?string $username;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("resource_state")
     */
    private ?int $resourceState;

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
     * @JMS\SerializedName("bio")
     */
    private ?string $bio;

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
     * @JMS\SerializedName("premium")
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

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("badge_type_id")
     */
    private ?int $badgeTypeId;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    private ?float $weight;
//"friend":null,"follower":null}

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile_medium")
     */
    private ?string $profileMedium;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile_medium")
     */
    private ?string $profile;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("friend")
     */
    private ?bool $friend;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("follower")
     */
    private ?bool $follower;

    public function id(): ?int
    {
        return $this->id;
    }

    public function username(): ?string
    {
        return $this->username;
    }

    public function resourceState(): ?int
    {
        return $this->resourceState;
    }

    public function firstName(): ?string
    {
        return $this->firstName;
    }

    public function lastName(): ?string
    {
        return $this->lastName;
    }

    public function bio(): ?string
    {
        return $this->bio;
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

    public function badgeTypeId(): ?int
    {
        return $this->badgeTypeId;
    }

    public function weight(): ?float
    {
        return $this->weight;
    }

    public function profileMedium(): ?string
    {
        return $this->profileMedium;
    }

    public function profile(): ?string
    {
        return $this->profile;
    }

    public function friend(): ?bool
    {
        return $this->friend;
    }

    public function follower(): ?bool
    {
        return $this->follower;
    }
}
