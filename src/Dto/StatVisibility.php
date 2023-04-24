<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class StatVisibility
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("type")
     */
    private ?string $type;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("visibility")
     */
    private ?string $visibility;
}
