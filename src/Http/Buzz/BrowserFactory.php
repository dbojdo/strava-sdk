<?php

namespace Goosfraba\StravaSDK\Http\Buzz;

use Buzz\Browser;

interface BrowserFactory
{
    public function create(): Browser;
}
