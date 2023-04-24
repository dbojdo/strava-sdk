<?php

namespace Goosfraba\StravaSDK\SegmentEfforts;

final class ListSegmentEffortsRequest
{
    private const MAX_PER_PAGE = 200;

    private int $segmentId;

    private ?\DateTimeInterface $startDateLocal;

    private ?\DateTimeInterface $endDateLocal;

    private int $perPage;

    public function __construct(
        int $segmentId,
        ?\DateTimeInterface $startDateLocal = null,
        ?\DateTimeInterface $endDateLocal = null,
        ?int $perPage = self::MAX_PER_PAGE
    ) {
        $this->segmentId = $segmentId;
        $this->startDateLocal = $startDateLocal;
        $this->endDateLocal = $endDateLocal;
        $this->perPage = $perPage ?? self::MAX_PER_PAGE;
    }

    public function segmentId(): int
    {
        return $this->segmentId;
    }

    public function startDateLocal(): ?\DateTimeInterface
    {
        return $this->startDateLocal;
    }

    public function endDateLocal(): ?\DateTimeInterface
    {
        return $this->endDateLocal;
    }

    public function perPage(): int
    {
        return $this->perPage;
    }

    public function toQueryString(): string
    {
        $params = [
            sprintf("segment_id=%d", $this->segmentId),
            sprintf("per_page=%d", $this->perPage)
        ];

        if ($this->startDateLocal) {
            $params[] = sprintf("start_date_local=%s", urlencode($this->startDateLocal->format(\DateTimeInterface::ISO8601)));
        }

        if ($this->endDateLocal) {
            $params[] = sprintf("end_date_local=%s", urlencode($this->endDateLocal->format(\DateTimeInterface::ISO8601)));
        }

        return implode("&", $params);
    }
}
