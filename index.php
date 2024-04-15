<?php

namespace Syndicate;

use Approach\Render\HTML;
use Syndicate\Render\Badge;
use Syndicate\Render\Tile;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$html = new HTML('html');
$html[] = $head = new HTML('head');
$head[] = new HTML('link', attributes: ["href" => "static/css/Badge.css", "rel" => "stylesheet"]);
$head[] = new HTML('link', attributes: ["href" => "static/css/tile.css", "rel" => "stylesheet"]);

$tile = new Tile(title: "Google", icon: new HTML(tag: 'div', content: "✨"));

$badge = new Badge(name: "Key", value: "Value", link: "#");

$html[] = $badge;
$html[] = $tile;

echo $html;