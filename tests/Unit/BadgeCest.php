<?php

namespace Tests\Unit;

use Syndicate\Render\Badge;
use Tests\Support\UnitTester;

class BadgeCest
{
    public function badgeTest(UnitTester $I)
    {
        $badge = new Badge(tag: 'div', name: 'Hello!', value: 'World!', link: 'https://youtube.com');
        $expected = <<<HTML
            <div class="Badge"><span><a href="https://youtube.com">Hello!</a></span><span><a href="https://youtube.com">World!</a></span></div>
            HTML;
        $I->assertEquals($expected, $badge);
    }
}
