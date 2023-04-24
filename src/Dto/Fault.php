<?php

namespace Goosfraba\StravaSDK\Dto;

use JMS\Serializer\Annotation as JMS;

final class Fault
{
    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("message")
     */
    private ?string $message;

    /**
     * @JMS\Type("array<Goosfraba\StravaSDK\Dto\Error>")
     * @JMS\SerializedName("errors")
     */
    private array $errors;

    public function message(): ?string
    {
        return $this->message;
    }

    public function errors(): array
    {
        return $this->errors;
    }
}
