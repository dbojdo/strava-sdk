<?php

namespace Goosfraba\StravaSDK\Unit\Dto;

use Goosfraba\StravaSDK\Dto\SportType;
use PHPUnit\Framework\TestCase;

class SportTypeTest extends TestCase
{
    /**
     * @test
     */
    public function itCanBeParsed(): void
    {
        $this->assertSame(SportType::backcountrySki(), SportType::parse("Backcountryski"));
    }
}
