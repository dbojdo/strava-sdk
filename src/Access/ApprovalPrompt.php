<?php

namespace Goosfraba\StravaSDK\Access;

use Goosfraba\StravaSDK\Common\AbstractEnum;

/**
 * Represents the Strava resource prompt mode
 *
 * @method static ApprovalPrompt auto
 * @method static ApprovalPrompt force
 */
final class ApprovalPrompt extends AbstractEnum
{
    private const AUTO = "auto";
    private const FORCE = "force";
}
