<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Syndicate\Render\Form;
use Syndicate\Render\Input;

$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
$form = new Form(formEle: $input);

echo $form;
