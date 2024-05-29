<?php

namespace Syndicate;

use Approach\Render\HTML;
use Syndicate\Render\Tile;
use Syndicate\Render\TokenVisual;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$html = new HTML('html');

// $title = 'Google';
// $icon = new HTML(tag: 'div', content: '✨');
// $tile = new Tile(tag: 'div', title: $title, icon: $icon);
// $html[] = $tile;
$html[] = new TokenVisual();
echo $html;
