<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class PhotosSummary
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("count")
     */
    private ?int $count;

    /**
     * @JMS\Type("Goosfraba\StravaSDK\Dto\PhotosSummaryPrimary")
     * @JMS\SerializedName("primary")
     */
    private ?PhotosSummaryPrimary $primary;
}
