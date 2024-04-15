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
            <div class="Tabs">
                <div class="Buttons">
                    <div class="tabs-btn btn-activated">Hello</div>
                    <div class="tabs-btn">Hi</div>
                    <div class="tabs-btn">Nice</div>
                </div>
                <div class="Contents">
                    <div class="activated">
                        This is such a cool div
                    </div>
                    <div>
                        Well so is this
                    </div>
                    <div>
                        Tabs div
                    </div>
                </div>
            </div> 
            HTML;
        $I->assertEquals($expected, $tabs);
    }
}
