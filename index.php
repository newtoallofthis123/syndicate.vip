<?php

namespace Syndicate;

use Approach\Render\HTML;
use Syndicate\Render\Badge;

require_once __DIR__ . '/support/lib/vendor/autoload.php';

$badge = new Badge(name: "Key", value: "Value", link: "https://youtube.com");

echo $badge;