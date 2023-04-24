<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;


final class PolylineMap
{
    use MetaResource;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("polyline")
     */
    private ?string $polyline;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("summary_polyline")
     */
    private ?string $summaryPolyline;

    public function polyline(): ?string
    {
        return $this->polyline;
    }

    public function summaryPolyline(): ?string
    {
        return $this->summaryPolyline;
    }
}
