<?php

namespace Goosfraba\StravaSDK\Http\Buzz;

use Buzz\Browser;

final class StaticBrowserFactory implements BrowserFactory
{
    private Browser $browser;

    public function __construct(Browser $browser)
    {
        $this->browser = $browser;
    }

    public function create(): Browser
    {
        return $this->browser;
    }
}
