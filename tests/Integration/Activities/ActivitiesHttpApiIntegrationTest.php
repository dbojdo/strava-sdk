<?php

namespace Goosfraba\StravaSDK\Integration\Activities;

use Goosfraba\StravaSDK\Activities\ActivitiesHttpResourceApi;
use Goosfraba\StravaSDK\Dto\ActivityZone;
use Goosfraba\StravaSDK\Dto\Comment;
use Goosfraba\StravaSDK\Dto\DetailedActivity;
use Goosfraba\StravaSDK\Dto\Lap;
use Goosfraba\StravaSDK\Dto\NewActivity;
use Goosfraba\StravaSDK\Dto\SportType;
use Goosfraba\StravaSDK\Dto\SummaryActivity;
use Goosfraba\StravaSDK\Dto\SummaryAthlete;
use Goosfraba\StravaSDK\Dto\UpdatableActivity;
use Goosfraba\StravaSDK\Integration\AbstractHttpApiIntegrationTest;

class ActivitiesHttpApiIntegrationTest extends AbstractHttpApiIntegrationTest
{
    private ActivitiesHttpResourceApi $api;

    protected function setUp(): void
    {
        $this->api = $this->apiFactory()->activitiesApi();
    }

    /**
     * @test
     */
    public function itGetsActivityById(): void
    {
        $this->assertInstanceOf(
            DetailedActivity::class,
            $this->api->getActivity($this->activityId(), true)
        );
    }

    /**
     * @test
     */
    public function itUpdatesActivity(): void
    {
        $activity = $this->api->getActivity($this->activityId());
        $originalName = $activity->name();

        $activity = $this->api->updateActivity(
            UpdatableActivity::create($this->activityId())->withName($newName = $originalName . " " . mt_rand(1, PHP_INT_MAX))
        );
        $this->assertEquals($newName, $activity->name());

        // revert to the original name
        $this->api->updateActivity(
            UpdatableActivity::create($this->activityId())->withName($originalName)
        );
    }

    /**
     * @test
     */
    public function itListsActivityComments(): void
    {
        $comments = $this->api->listActivityComments($this->activityId());
        $this->assertContainsOnly(Comment::class, $comments);
    }

    /**
     * @test
     */
    public function itListsActivityKudoers(): void
    {
        $kudoers = $this->api->listActivityKudoers($this->activityId());
        $this->assertContainsOnly(SummaryAthlete::class, $kudoers);
    }

    /**
     * @test
     */
    public function itListsActivityLaps(): void
    {
        $laps = $this->api->listActivityLaps($this->activityId());
        $this->assertContainsOnly(Lap::class, $laps);
    }

    /**
     * @test
     */
    public function itListsActivityZones(): void
    {
        $zones = $this->api->listActivityZones($this->activityId());
        $this->assertContainsOnly(ActivityZone::class, $zones);
    }

    /**
     * @test
     */
    public function itCreatesActivity(): void
    {
        $testCreate = (bool)getenv("TEST_ACTIVITY_CREATE");
        if (!$testCreate) {
            $this->markTestSkipped("Activity creation test is not disabled.");
        }

        $newActivity = new NewActivity(
            "Some Activity",
            SportType::ride(),
            new \DateTimeImmutable(),
            300,
            "Some Description",
            12332.32,
            true,
            true
        );

        $activity = $this->api->createActivity($newActivity);
        $this->assertInstanceOf(DetailedActivity::class, $activity);
    }

    /**
     * @test
     */
    public function itListsAthleteActivities(): void
    {
        $activities = $this->api->listAthleteActivities();
        $this->assertContainsOnly(SummaryActivity::class, $activities);
    }
}
