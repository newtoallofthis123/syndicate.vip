<?php

namespace Tests\Unit;

use Syndicate\Render\TokenVisual;
use Tests\Support\UnitTester;

class TokenVisualCest
{
    public function tokenVisualTest(UnitTester $I)
    {
        $tokenVisual = new TokenVisual(
            name: 'Hello!', 
            value: 'World!', 
            source_url: 'https://youtube.com'
        );
        $expected = <<<HTML
            <token class="TokenVisual"><span>Hello!</span><span>World!</span><a href="https://youtube.com">https://youtube.com</a></token>
            HTML;
        $I->assertEquals($expected, $tokenVisual);
    }
}
