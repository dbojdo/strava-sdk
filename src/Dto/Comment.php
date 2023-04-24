<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class Comment
{
    use MetaResource;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("activity_id")
     */
    private ?int $activityId;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("post_id")
     */
    private ?int $postId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("text")
     */
    private ?string $text;

    /**
     * @JMS\Type("array")
     * @JMS\SerializedName("mentions_metadata")
     */
    private ?array $mentionsMetadata;

    /**
     * @JMS\Type("DateTimeImmutable")
     * @JMS\SerializedName("created_at")
     */
    private ?\DateTimeInterface $createdAt;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("cursor")
     */
    private ?string $cursor;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\SummaryAthlete")
     * @JMS\SerializedName("athlete")
     */
    private ?SummaryAthlete $athlete;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("reaction_count")
     */
    private ?int $reactionCount;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("has_reacted")
     */
    private ?bool $hasReacted;

    public function activityId(): ?int
    {
        return $this->activityId;
    }

    public function postId(): ?int
    {
        return $this->postId;
    }

    public function text(): ?string
    {
        return $this->text;
    }

    public function mentionsMetadata(): ?array
    {
        return $this->mentionsMetadata;
    }

    public function createdAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function cursor(): ?string
    {
        return $this->cursor;
    }

    public function athlete(): ?SummaryAthlete
    {
        return $this->athlete;
    }

    public function reactionCount(): ?int
    {
        return $this->reactionCount;
    }

    public function hasReacted(): ?bool
    {
        return $this->hasReacted;
    }
}
