<?php
namespace Syndicate;
require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;

$x = new HTML(tag: "div", content: "Hello World");
echo $x;
