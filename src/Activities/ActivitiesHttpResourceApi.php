<?php

namespace Goosfraba\StravaSDK\Activities;

use Goosfraba\StravaSDK\Dto\ActivityZone;
use Goosfraba\StravaSDK\Dto\Comment;
use Goosfraba\StravaSDK\Dto\DetailedActivity;
use Goosfraba\StravaSDK\Dto\Lap;
use Goosfraba\StravaSDK\Dto\NewActivity;
use Goosfraba\StravaSDK\Dto\SummaryActivity;
use Goosfraba\StravaSDK\Dto\SummaryAthlete;
use Goosfraba\StravaSDK\Dto\UpdatableActivity;
use Goosfraba\StravaSDK\Http\AbstractHttpApi;

final class ActivitiesHttpResourceApi extends AbstractHttpApi implements ActivitiesApi
{
    private const DEFAULT_PAGE = 1;
    private const MAX_ACTIVITIES_PAGE_SIZE = 30;
    private const MAX_COMMENTS_PAGE_SIZE = 200;
    private const MAX_KUDOERS_PAGE_SIZE = 200;

    public function getActivity(int $activityId, bool $allEfforts = false): ?DetailedActivity
    {
        return $this->get(sprintf("/activities/%d?include_all_efforts=%d", $activityId, (int)$allEfforts), DetailedActivity::class);
    }

    public function updateActivity(UpdatableActivity $activity): DetailedActivity
    {
        return $this->put(sprintf("/activities/%d", $activity->id()), $activity, DetailedActivity::class);
    }

    public function listActivityComments(int $activityId, ?int $pageSize = null, ?string $afterCursor = null): array
    {
        $pageSize = $pageSize ?? self::MAX_COMMENTS_PAGE_SIZE;

        $url = sprintf("/activities/%d/comments?page_size=%d", $activityId, $pageSize);
        if ($afterCursor) {
            $url .= sprintf("&after_cursor=%s", urlencode($afterCursor));
        }

        return $this->get(
            $url,
            sprintf("array<%s>", Comment::class)
        );
    }

    public function listActivityKudoers(int $activityId, ?int $page = null, ?int $pageSize = null): array
    {
        $page = $page ?? self::DEFAULT_PAGE;
        $pageSize = $pageSize ?? self::MAX_KUDOERS_PAGE_SIZE;

        $url = sprintf("/activities/%d/kudos?page=%d&page_size=%d", $activityId, $page, $pageSize);

        return $this->get(
            $url,
            sprintf("array<%s>", SummaryAthlete::class)
        );
    }

    public function listActivityLaps(int $activityId): array
    {
        return $this->get(
            sprintf("/activities/%s/laps", $activityId),
            sprintf("array<%s>", Lap::class)
        );
    }

    public function listActivityZones(int $activityId): array
    {
        return $this->get(
            sprintf("/activities/%s/zones", $activityId),
            sprintf("array<%s>", ActivityZone::class)
        );
    }

    public function createActivity(NewActivity $activity): DetailedActivity
    {
        return $this->postForm("/activities", $activity->toFormData(), DetailedActivity::class);
    }

    public function listAthleteActivities(
        ?int $page = null,
        ?int $pageSize = null,
        ?\DateTimeInterface $before = null,
        ?\DateTimeInterface $after = null
    ): array {
        $page = $page ?? self::DEFAULT_PAGE;
        $pageSize = $pageSize ?? self::MAX_ACTIVITIES_PAGE_SIZE;

        $url = sprintf(
            "/activities?page=%d&page_size=%d",
            $page,
            $pageSize
        );
        if ($before) {
            $url .= sprintf("&before=%s", $before->getTimestamp());
        }

        if ($after) {
            $url .= sprintf("&after=%s", $after->getTimestamp());
        }

        return $this->get(
            $url,
            sprintf("array<%s>", SummaryActivity::class)
        );
    }
}
