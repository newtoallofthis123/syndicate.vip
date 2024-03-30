<?php

namespace Syndicate;

require_once __DIR__ . '/support/lib/vendor/autoload.php';
require_once 'tablecontent.php';

use Syndicate\Render\Form;
use Syndicate\Render\Input;
use Syndicate\Render\Table;
use Syndicate\Render\TableStructure;
use Syndicate\Render\TextArea;
use Syndicate\Render\Table2;

$input = new Input(value: '12@wow.com', type: 'email', name: 'email');
$form = new Form();

$textarea = new TextArea(placeholder: "wow", rows: 10, cols: 5);

$form->addFormEle($input);
$form->addFormEle($textarea);

$table2 = require 'tablecontent.php';

$tableStructure = new TableStructure();
$table = new Table();

$table->content = "
    <tr>
        <td>Row 1, Cell 1</td>
        <td>Row 1, Cell 2</td>
    </tr>
    <br>
    <tr>
        <td>Row 2, Cell 1</td>
        <td>Row 2, Cell 2</td>
    </tr>
    <br>
    <tr>
        <td>Row 3, Cell 1</td>
        <td>Row 3, Cell 2</td>
    </tr>
";

echo $form . "<br>";
echo $tableStructure . "<br>";
echo $table . "<br>";
echo $table2;

?>
