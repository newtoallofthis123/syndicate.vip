<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;
use Syndicate\Render\Input;

$x = new HTML(tag: 'div', content: 'Hello World');
$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
echo $input;
