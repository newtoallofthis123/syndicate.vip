<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;
use Syndicate\Render\ProgressBar;

$html = new HTML(tag: 'html');
$html[] = $head = new HTML(tag: 'head');
$head[] = new HTML(tag: 'link', attributes: [
    'rel' => 'stylesheet',
    'type' => 'text/css',
    'href' => '/static/css/tab.css',
], selfContained: true);

$html[] = $body = new HTML(tag: 'body');

$visual = new HTML(tag: 'div', content: 'This is the visual');
$color = 'red';

$progress = new ProgressBar(tag: 'div', visual: $visual, color: $color);

$body[] = $progress;

echo $html;
