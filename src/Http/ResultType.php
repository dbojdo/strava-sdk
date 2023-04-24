<?php

namespace Goosfraba\StravaSDK\Http;

final class ResultType implements \Stringable
{
    private const FORMAT_JSON = "json";

    private string $format;

    private string $type;

    public function __construct(string $format, string $type)
    {
        $this->format = $format;
        $this->type = $type;
    }

    public static function json(string $type): self
    {
        return new self(self::FORMAT_JSON, $type);
    }

    public function format(): string
    {
        return $this->format;
    }

    public function __toString(): string
    {
        return $this->type;
    }
}
