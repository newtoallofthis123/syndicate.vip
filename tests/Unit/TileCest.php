<?php


namespace Test\Unit;

use Syndicate\Render\Tile;
use Tests\Support\UnitTester;

class TileCest
{
    public function TileCest(UnitTester $I)
    {
        $tile = new Tile(tag: 'div');
        $title = "google";
        $tile[] = $title;
        $icon= new Tile(tag: 'div', content: "✨");
        $tile[] = $icon;

        $expected = <<<HTML
            <div class="Tile">
                <button class="content">
                    <div>✨</div>
                    <h1>google</h1>
                </button>  
            </div>
        HTML;
        $I->assertEquals($expected , $tile);          
    }
}