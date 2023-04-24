<?php

use Goosfraba\StravaSDK\Access\ApprovalPrompt;
use Goosfraba\StravaSDK\Access\RequestAccessUrl;
use Goosfraba\StravaSDK\Access\Scope;

include __DIR__.'/../vendor/autoload.php';

$url = new RequestAccessUrl(
    "26147",
    "https://localhost/strava/access-granted",
    [
        Scope::general(true),
        Scope::profile(true, true),
        Scope::activity(true, true)
    ],
    null,
    ApprovalPrompt::force()
);

echo $url . "\n";
