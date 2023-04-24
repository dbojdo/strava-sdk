<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

trait Activity
{
    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\MetaAthlete")
     * @JMS\SerializedName("athlete")
     */
    private MetaAthlete $athlete;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private ?string $name;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("distance")
     */
    private ?float $distance;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("moving_time")
     */
    private ?int $movingTime;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("elapsed_time")
     */
    private ?int $elapsedTime;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("total_elevation_gain")
     */
    private ?float $totalElevationGain;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    private ?string $type;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("sport_type")
     */
    private ?string $sportType;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("workout_type")
     */
    private ?int $workoutType;

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
     * @JMS\Type("string")
     * @JMS\SerializedName("timezone")
     */
    private ?string $timezone;


    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("utc_offset")
     */
    private ?float $utcOffset;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("location_city")
     */
    private ?string $locationCity;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("location_state")
     */
    private ?string $locationState;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("location_country")
     */
    private ?string $locationCountry;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("achievement_count")
     */
    private ?int $achievementCount;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("kudos_count")
     */
    private ?int $kudosCount;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("comment_count")
     */
    private ?int $commentsCount;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("athlete_count")
     */
    private ?int $athleteCount;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("photo_count")
     */
    private ?int $photoCount;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\PolylineMap")
     * @JMS\SerializedName("map")
     */
    private ?PolylineMap $map;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("trainer")
     */
    private ?bool $trainer;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("commute")
     */
    private ?bool $commute;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("manual")
     */
    private ?bool $manual;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("private")
     */
    private ?bool $private;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("visibility")
     */
    private ?string $visibility;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("flagged")
     */
    private ?bool $flagged;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("gear_id")
     */
    private ?string $gearId;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("start_latlng")
     */
    private ?array $startLatLng;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("end_latlng")
     */
    private ?array $endLatLng;

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
     * @JMS\Type("float")
     * @JMS\SerializedName("average_temp")
     */
    private ?float $averageTemp;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("average_watts")
     */
    private ?float $averageWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("max_watts")
     */
    private ?float $maxWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("weighted_average_watts")
     */
    private ?float $weightedAverageWatts;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("kilojoules")
     */
    private ?float $kilojoules;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("device_watts")
     */
    private ?bool $deviceWatts;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("has_heartrate")
     */
    private ?bool $hasHeartRate;

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
     * @JMS\Type("bool")
     * @JMS\SerializedName("heartrate_opt_out")
     */
    private ?bool $heartRateOptOut;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("display_hide_heartrate_option")
     */
    private ?bool $displayHideHeartRateOption;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("elev_high")
     */
    private ?float $elevHigh;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("elev_low")
     */
    private ?float $elevLow;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("upload_id")
     */
    private ?int $uploadId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("upload_id_str")
     */
    private ?string $uploadIdStr;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("external_id")
     */
    private ?string $externalId;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("from_accepted_tag")
     */
    private ?bool $fromAcceptedTag;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("pr_count")
     */
    private ?int $prCount;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("total_photo_count")
     */
    private ?int $totalPhotoCount;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("has_kudoed")
     */
    private ?bool $hasKudoed;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("suffer_score")
     */
    private ?float $sufferScore;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("description")
     */
    private ?string $description;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("calories")
     */
    private ?float $calories;

    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("perceived_exertion")
     */
    private ?float $perceivedExertion;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("prefer_perceived_exertion")
     */
    private ?bool $preferPerceivedExertion;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\DetailedSegmentEffort>")
     * @JMS\SerializedName("segment_efforts")
     */
    private ?array $segmentEfforts;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\DetailedSegmentEffort>")
     * @JMS\SerializedName("best_efforts")
     *
     * @var DetailedSegmentEffort[]
     */
    private ?array $bestEfforts;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\Split>")
     * @JMS\SerializedName("splits_metric")
     *
     * @var Split[]
     */
    private ?array $splitsMetric;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\Split>")
     * @JMS\SerializedName("splits_standard")
     *
     * @var Split[]
     */
    private ?array $splitsStandard;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\Lap>")
     * @JMS\SerializedName("laps")
     *
     * @var Lap[]
     */
    private ?array $laps;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\SummaryGear")
     * @JMS\SerializedName("gear")
     */
    private ?SummaryGear $gear;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\PhotosSummary")
     * @JMS\SerializedName("photos")
     */
    private ?PhotosSummary $photos;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\StatVisibility>")
     * @JMS\SerializedName("stats_visibility")
     *
     * @var StatVisibility[]
     */
    private ?array $statsVisibility;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("hide_from_home")
     */
    private ?bool $hideFromHome;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("device_name")
     */
    private ?string $deviceName;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("embed_token")
     */
    private ?string $embedToken;

    /**
     * @JMS\Type("array<string>")
     * @JMS\SerializedName("available_zones")
     */
    private ?array $availableZones;

    public function athlete(): MetaAthlete
    {
        return $this->athlete;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function distance(): ?float
    {
        return $this->distance;
    }

    public function movingTime(): ?int
    {
        return $this->movingTime;
    }

    public function elapsedTime(): ?int
    {
        return $this->elapsedTime;
    }

    public function totalElevationGain(): ?float
    {
        return $this->totalElevationGain;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    public function sportType(): ?string
    {
        return $this->sportType;
    }

    public function workoutType(): ?int
    {
        return $this->workoutType;
    }

    public function startDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function startDateLocal(): ?\DateTimeInterface
    {
        return $this->startDateLocal;
    }

    public function timezone(): ?string
    {
        return $this->timezone;
    }

    public function utcOffset(): ?float
    {
        return $this->utcOffset;
    }

    public function locationCity(): ?string
    {
        return $this->locationCity;
    }

    public function locationState(): ?string
    {
        return $this->locationState;
    }

    public function locationCountry(): ?string
    {
        return $this->locationCountry;
    }

    public function achievementCount(): ?int
    {
        return $this->achievementCount;
    }

    public function kudosCount(): ?int
    {
        return $this->kudosCount;
    }

    public function commentsCount(): ?int
    {
        return $this->commentsCount;
    }

    public function athleteCount(): ?int
    {
        return $this->athleteCount;
    }

    public function photoCount(): ?int
    {
        return $this->photoCount;
    }

    public function map(): ?PolylineMap
    {
        return $this->map;
    }

    public function trainer(): ?bool
    {
        return $this->trainer;
    }

    public function commute(): ?bool
    {
        return $this->commute;
    }

    public function manual(): ?bool
    {
        return $this->manual;
    }

    public function private(): ?bool
    {
        return $this->private;
    }

    public function visibility(): ?string
    {
        return $this->visibility;
    }

    public function flagged(): ?bool
    {
        return $this->flagged;
    }

    public function gearId(): ?string
    {
        return $this->gearId;
    }

    public function startLatLng(): ?array
    {
        return $this->startLatLng;
    }

    public function endLatLng(): ?array
    {
        return $this->endLatLng;
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

    public function averageTemp(): ?float
    {
        return $this->averageTemp;
    }

    public function averageWatts(): ?float
    {
        return $this->averageWatts;
    }

    public function maxWatts(): ?float
    {
        return $this->maxWatts;
    }

    public function weightedAverageWatts(): ?float
    {
        return $this->weightedAverageWatts;
    }

    public function kilojoules(): ?float
    {
        return $this->kilojoules;
    }

    public function deviceWatts(): ?bool
    {
        return $this->deviceWatts;
    }

    public function hasHeartRate(): ?bool
    {
        return $this->hasHeartRate;
    }

    public function averageHeartRate(): ?float
    {
        return $this->averageHeartRate;
    }

    public function maxHeartRate(): ?float
    {
        return $this->maxHeartRate;
    }

    public function heartRateOptOut(): ?bool
    {
        return $this->heartRateOptOut;
    }

    public function displayHideHeartRateOption(): ?bool
    {
        return $this->displayHideHeartRateOption;
    }

    public function elevHigh(): ?float
    {
        return $this->elevHigh;
    }

    public function elevLow(): ?float
    {
        return $this->elevLow;
    }

    public function uploadId(): ?int
    {
        return $this->uploadId;
    }

    public function uploadIdStr(): ?string
    {
        return $this->uploadIdStr;
    }

    public function externalId(): ?string
    {
        return $this->externalId;
    }

    public function fromAcceptedTag(): ?bool
    {
        return $this->fromAcceptedTag;
    }

    public function prCount(): ?int
    {
        return $this->prCount;
    }

    public function totalPhotoCount(): ?int
    {
        return $this->totalPhotoCount;
    }

    public function hasKudoed(): ?bool
    {
        return $this->hasKudoed;
    }

    public function sufferScore(): ?float
    {
        return $this->sufferScore;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function calories(): ?float
    {
        return $this->calories;
    }

    public function perceivedExertion(): ?float
    {
        return $this->perceivedExertion;
    }

    public function preferPerceivedExertion(): ?bool
    {
        return $this->preferPerceivedExertion;
    }

    public function segmentEfforts(): ?array
    {
        return $this->segmentEfforts;
    }

    public function bestEfforts(): ?array
    {
        return $this->bestEfforts;
    }

    public function splitsMetric(): ?array
    {
        return $this->splitsMetric;
    }

    public function splitsStandard(): ?array
    {
        return $this->splitsStandard;
    }

    public function laps(): ?array
    {
        return $this->laps;
    }

    public function gear(): ?SummaryGear
    {
        return $this->gear;
    }

    public function photos(): ?PhotosSummary
    {
        return $this->photos;
    }

    public function statsVisibility(): ?array
    {
        return $this->statsVisibility;
    }

    public function hideFromHome(): ?bool
    {
        return $this->hideFromHome;
    }

    public function deviceName(): ?string
    {
        return $this->deviceName;
    }

    public function embedToken(): ?string
    {
        return $this->embedToken;
    }

    public function availableZones(): ?array
    {
        return $this->availableZones;
    }
}
