<?php

namespace Tests\Unit;

use Approach\Render\HTML;
use Syndicate\Render\Tabs;
use Tests\Support\UnitTester;

class TabsCest
{
    /**
     * @return void
     */
    public function tabsTest(UnitTester $I): void
    {
        $tabs = new Tabs(tag: 'div');
        $tabs['Hello'] = new HTML(tag: 'div', classes: ['activated'], content: 'This is such a cool div');
        $tabs['Hi'] = new HTML(tag: 'div', content: 'Well so is this');
        $tabs['Nice'] = new HTML(tag: 'div', content: 'Tabs div');
        $expected = <<<HTML
            <div class="Tabs"><div class="Buttons"><button class="tabs-btn">Hello</button><button class="tabs-btn">Hi</button><button class="tabs-btn">Nice</button></div><div class="activated" data-tab="Hello">This is such a cool div</div><div data-tab="Hi">Well so is this</div><div data-tab="Nice">Tabs div</div></div>
            HTML;
        $I->assertEquals($expected, $tabs);
    }
}
