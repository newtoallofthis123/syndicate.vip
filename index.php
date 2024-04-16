<?php

namespace Syndicate;

use Approach\Render\HTML;
use Syndicate\Render\Tile;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$html = new HTML('html');

$title = 'Google';
$icon = new HTML(tag: 'div', content: '✨');
$tile = new Tile(tag: 'div', title: $title, icon: $icon);
$html[] = $tile;

echo $html;
