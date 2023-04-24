<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class DetailedAthlete
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("username")
     */
    private ?string $username = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("firstname")
     */
    private ?string $firstname = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("lastname")
     */
    private ?string $lastname = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("bio")
     */
    private ?string $bio = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("city")
     */
    private ?string $city = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("state")
     */
    private ?string $state = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("country")
     */
    private ?string $country = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sex")
     */
    private ?string $sex = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("premium")
     */
    private ?bool $premium = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("premium")
     */
    private ?bool $summit = null;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("created_at")
     */
    private ?\DateTimeInterface $createdAt = null;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("updated_at")
     */
    private ?\DateTimeInterface $updatedAt = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("badge_type_id")
     */
    private ?int $badgeTypeId = null;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("weight")
     */
    private ?float $weight = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile_medium")
     */
    private ?string $profileMedium = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("profile")
     */
    private ?string $profile = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("friend")
     */
    private ?bool $friend = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("follower")
     */
    private ?bool $follower = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("blocked")
     */
    private ?bool $blocked = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("can_follow")
     */
    private ?bool $canFollow = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("measurement_preference")
     */
    private ?string $measurementPreference = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("ftp")
     */
    private ?int $ftp = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("follower_count")
     */
    private ?int $followerCount = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("friend_count")
     */
    private ?int $friendCount = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("mutual_friend_count")
     */
    private ?int $mutualFriendCount = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("athlete_type")
     */
    private ?int $athleteType = null;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("date_preference")
     */
    private ?string $datePreference = null;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\SummaryClub>")
     * @JMS\SerializedName("clubs")
     *
     * @var SummaryClub[]
     */
    private array $clubs = [];

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\SummaryGear>")
     * @JMS\SerializedName("bikes")
     *
     * @var SummaryGear[]
     */
    private array $bikes = [];

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\SummaryGear>")
     * @JMS\SerializedName("shoes")
     *
     * @var SummaryGear[]
     */
    private array $shoes = [];

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("is_winback_via_upload")
     *
     * @var bool
     */
    private ?bool $isWinbackViaUpload = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("is_winback_via_view")
     *
     * @var bool
     */
    private ?bool $isWinbackViaView = null;

    public function username(): ?string
    {
        return $this->username;
    }

    public function firstname(): ?string
    {
        return $this->firstname;
    }

    public function lastname(): ?string
    {
        return $this->lastname;
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

    public function blocked(): ?bool
    {
        return $this->blocked;
    }

    public function canFollow(): ?bool
    {
        return $this->canFollow;
    }

    public function measurementPreference(): ?string
    {
        return $this->measurementPreference;
    }

    public function ftp(): ?int
    {
        return $this->ftp;
    }

    public function followerCount(): ?int
    {
        return $this->followerCount;
    }

    public function friendCount(): ?int
    {
        return $this->friendCount;
    }

    public function mutualFriendCount(): ?int
    {
        return $this->mutualFriendCount;
    }

    public function athleteType(): ?int
    {
        return $this->athleteType;
    }

    public function datePreference(): ?string
    {
        return $this->datePreference;
    }

    public function clubs(): array
    {
        return $this->clubs;
    }

    public function bikes(): array
    {
        return $this->bikes;
    }

    public function shoes(): array
    {
        return $this->shoes;
    }

    public function isWinbackViaUpload(): ?bool
    {
        return $this->isWinbackViaUpload;
    }

    public function isWinbackViaView(): ?bool
    {
        return $this->isWinbackViaView;
    }
}
