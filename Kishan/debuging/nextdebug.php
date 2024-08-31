<?php
var_dump(ini_get('display_errors'));
ini_set('display_errors', 0); //to remove error 
$st = [1];
echo $st[5];
