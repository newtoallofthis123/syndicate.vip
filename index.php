<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;
use Syndicate\Render\Input;

$x = new HTML(tag: 'div');
$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
$x[] = $input;
echo $x;
