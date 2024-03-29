<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Syndicate\Render\Form;
use Syndicate\Render\Input;
use Syndicate\Render\TextArea;

$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
$form = new Form();

$textarea = new TextArea(placeholder: "wow", rows: 10, cols: 5);
// $textarea->content = "This is so cool";

$form->addFormEle($input);
$form->addFormEle($textarea);

echo $form;
