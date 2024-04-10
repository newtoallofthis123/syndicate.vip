<?php


namespace Tests\Unit;

use Syndicate\Render\Badge;
use Tests\Support\UnitTester;

class BadgeCest
{
    public function badgeTest(UnitTester $I)
    {
        $badge = new Badge(tag: 'div');
        $link = "https://github.com/mrohith29";
        $badge[] = $link;
        $name = "link";
        $badge[] = $name;
        $value = "github";

        $badge[] = $value;

        $expected = <<<HTML
            <div class="Badge">
                <div class="name">
                    <a href="$link">$name</a>
            <   /div>
                <div class="val">
                    <a href="$link">$value</a>
                </div>
            </div>
        HTML;
        $I->assertEquals($expected, $badge);
    }
}
