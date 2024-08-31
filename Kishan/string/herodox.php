<?php

$x=10;
$str = <<<STRING
Hello World $x
STRING;
echo$str."<br>";

$lang="PHP";
$x=20;
$str = <<<'STRING'
Hello Universe $x
STRING;
echo$str;

?>