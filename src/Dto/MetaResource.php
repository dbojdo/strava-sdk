<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

trait MetaResource
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    private ?int $id = null;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("resource_state")
     */
    private ?int $resourceState = null;

    public function id(): ?int
    {
        return $this->id;
    }

    public function resourceState(): ?int
    {
        return $this->resourceState;
    }
}
