<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class PhotosSummaryPrimary
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    private ?int $id;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("source")
     */
    private ?int $source;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("unique_id")
     */
    private ?string $uniqueId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("urls")
     */
    private ?string $urls;

    public function id(): ?int
    {
        return $this->id;
    }

    public function source(): ?int
    {
        return $this->source;
    }

    public function uniqueId(): ?string
    {
        return $this->uniqueId;
    }

    public function urls(): ?string
    {
        return $this->urls;
    }
}
