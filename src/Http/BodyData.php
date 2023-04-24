<?php

namespace Goosfraba\StravaSDK\Http;

final class BodyData
{
    private string $format;

    private array $groups;

    private bool $withNull;

    private $data;

    public function __construct(string $format, $data, array $groups = [], bool $withNull = true)
    {
        $this->format = $format;
        $this->groups = $groups;
        $this->withNull = $withNull;
        $this->data = $data;
    }

    public static function json($data, array $groups = [], bool $withNull = true): self
    {
        return new self("json", $data, $groups, $withNull);
    }

    public static function form($data): self
    {
        return new self("form", $data);
    }

    public function format(): string
    {
        return $this->format;
    }

    public function groups(): array
    {
        return $this->groups;
    }

    public function isWithNull(): bool
    {
        return $this->withNull;
    }

    public function data()
    {
        return $this->data;
    }
}
