<?php
namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Syndicate\Render\Button;
use Syndicate\Render\Form;
use Syndicate\Render\Input;
use Syndicate\Render\TextArea;

$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
$form = new Form();

$textarea = new TextArea(placeholder: "wow", rows: 1, cols: 5);
// $textarea->content = "This is so cool";

$form->addFormEle($input);
$form->addFormEle($textarea);

$button = new Button(placeholder: "Click", link:"https://github.com/mrohith29", width:"30", height:"20");

$form->addFormEle($button);
echo $form;
