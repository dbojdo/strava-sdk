<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class MetaClub
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("name")
     */
    private string $name;

    public function name(): string
    {
        return $this->name;
    }
}
