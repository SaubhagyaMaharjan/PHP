<?php
var_dump(ini_get('memory_limit'));
$st = "a";
for ($i = 1; $i <= 10; $i++) {
    $st .= $st;
}
echo "hello";
