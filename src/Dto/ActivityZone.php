<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class ActivityZone
{
    /**
     * @JMS\Type("float")
     * @JMS\SerializedName("score")
     */
    private ?float $score;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\DistributionBucket>")
     * @JMS\SerializedName("distribution_buckets")
     *
     * @var DistributionBucket[]
     */
    private ?array $distributionBuckets;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    private ?string $type;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("resource_state")
     */
    private ?int $resourceState;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("sensor_based")
     */
    private ?bool $sensorBased;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("points")
     */
    private ?int $points;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("custom_zones")
     */
    private ?bool $customZones;
}
