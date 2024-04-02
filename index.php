<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;
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
$head[] = $body = new HTML(tag: 'body');

echo $html;
