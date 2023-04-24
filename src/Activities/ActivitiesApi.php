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

interface ActivitiesApi
{
    public function getActivity(int $activityId, bool $allEfforts = false): ?DetailedActivity;

    public function createActivity(NewActivity $activity): DetailedActivity;

    public function updateActivity(UpdatableActivity $activity): DetailedActivity;

    /**
     * @return SummaryActivity[]
     */
    public function listAthleteActivities(?int $page = null, ?int $pageSize = null, ?\DateTimeInterface $before = null, ?\DateTimeInterface $after = null): array;

    /**
     * @return Comment[]
     */
    public function listActivityComments(int $activityId, ?int $pageSize = null, ?string $afterCursor = null): array;

    /**
     * @return SummaryAthlete[]
     */
    public function listActivityKudoers(int $activityId, ?int $page = null, ?int $pageSize = null): array;

    /**
     * @return Lap[]
     */
    public function listActivityLaps(int $activityId): array;

    /**
     * @return ActivityZone[]
     */
    public function listActivityZones(int $activityId): array;
}
