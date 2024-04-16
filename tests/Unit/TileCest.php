<?php

namespace Test\Unit;

use Approach\Render\HTML;
use Syndicate\Render\Tile;
use Tests\Support\UnitTester;

class TileCest
{
    public function tilesTest(UnitTester $I)
    {
        $title = 'Google';
        $icon = new HTML(tag: 'div', content: '✨');
        $tile = new Tile(tag: 'div', title: $title, icon: $icon);

        $expected = <<<HTML
            <div class="Tile"><button class="content"><div>✨</div><h1>Google</h1></button></div>
            HTML;
        $I->assertEquals($expected, $tile);
    }
}
