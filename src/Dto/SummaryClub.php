<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class SummaryClub
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name;

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
     * @JMS\SerializedName("cover_photo")
     */
    private ?string $coverPhoto;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("cover_photo_small")
     */
    private ?string $coverPhotoSmall;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sport_type")
     *
     * @var string
     */
    private ?string $sportType;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("activity_types")
     *
     * @var string[]
     */
    private ?array $activityTypes = [];

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("activity_types_icon")
     */
    private ?string $activityTypesIcon;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("dimensions")
     *
     * @var string[]
     */
    private ?array $dimensions;

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
     * @JMS\Type("int")
     * @JMS\SerializedName("member_count")
     */
    private ?int $memberCount;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("featured")
     */
    private ?bool $featured;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("verified")
     */
    private ?bool $verified;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("url")
     */
    private ?string $url;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("membership")
     */
    private ?string $membership;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("admin")
     */
    private ?bool $admin;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("owner")
     */
    private ?bool $owner;

    public function name(): ?string
    {
        return $this->name;
    }

    public function profileMedium(): ?string
    {
        return $this->profileMedium;
    }

    public function profile(): ?string
    {
        return $this->profile;
    }

    public function coverPhoto(): ?string
    {
        return $this->coverPhoto;
    }

    public function coverPhotoSmall(): ?string
    {
        return $this->coverPhotoSmall;
    }

    public function sportType(): ?SportType
    {
        return SportType::tryParse($this->sportType);
    }

    public function activityTypes(): ?array
    {
        return $this->activityTypes;
    }

    public function activityTypesIcon(): ?string
    {
        return $this->activityTypesIcon;
    }

    public function dimensions(): ?array
    {
        return $this->dimensions;
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

    public function isPrivate(): ?bool
    {
        return $this->private;
    }

    public function memberCount(): ?int
    {
        return $this->memberCount;
    }

    public function isFeatured(): ?bool
    {
        return $this->featured;
    }

    public function isVerified(): ?bool
    {
        return $this->verified;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function membership(): ?string
    {
        return $this->membership;
    }

    public function isAdmin(): ?bool
    {
        return $this->admin;
    }

    public function isOwner(): ?bool
    {
        return $this->owner;
    }
}
