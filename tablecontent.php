<?php

namespace Syndicate\Render;

$headers = ["Name", "Age", "City"];

$rows = [
  [] ,
  ["Alice", 30, "New York"],
  ["Bob", 25, "London"],
  ["Charlie", 40, "Paris"],
];

return new Table2(headers: $headers, rows: $rows);
