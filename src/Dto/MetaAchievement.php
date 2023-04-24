<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class MetaAchievement
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("type_id")
     */
    private int $typeId;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    private string $type;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("rank")
     */
    private int $rank;

    public function typeId(): int
    {
        return $this->typeId;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function rank(): int
    {
        return $this->rank;
    }
}
