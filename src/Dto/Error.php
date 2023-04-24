<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class Error
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("code")
     */
    private ?string $code;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("field")
     */
    private ?string $field;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("resource")
     */
    private ?string $resource;

    public function code(): ?string
    {
        return $this->code;
    }

    public function field(): ?string
    {
        return $this->field;
    }

    public function resource(): ?string
    {
        return $this->resource;
    }
}
