<?php

namespace Syndicate;

use Approach\Render\HTML;
use Syndicate\Render\Tabs;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$html = new HTML('html');

$tabs = new Tabs();
$tabs['nice'] = new HTML(tag: 'div', content: 'Hello Wolrd');
$tabs['wow'] = new HTML(tag: 'div', content: 'Hi');

$html[] = $tabs;

echo $html;
