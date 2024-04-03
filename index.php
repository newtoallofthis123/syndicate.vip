<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Syndicate\Render\Tab;
use Syndicate\Render\TabBar;
use Syndicate\Render\TabContent;
use Syndicate\Render\TabVisual;

$html = new HTML(tag: 'html');
$html[] = $head = new HTML(tag: 'head');
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '/static/css/tab.css',
], selfContained: true);

$html[] = $body = new HTML(tag: 'body');

$visual = new TabVisual(tag: 'div', content: 'Button1', activates: '12');
$visual1 = new TabVisual(tag: 'div', content: 'Button2', activates: '13');

$tab1 = new Tab(visual: $visual);
$tab2 = new Tab(visual: $visual1);

$tabcontent1 = new TabContent(activationId: '12');
$tabcontent2 = new TabContent(activationId: '13');

$tabbar = new TabBar(tag: 'div', tabs: [$tab1, $tab2], tabContents: [$tabcontent1, $tabcontent2]);

echo $tabbar;
