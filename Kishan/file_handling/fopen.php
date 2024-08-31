<?php
$fptr = fopen("file.txt", "r");
$val = fread($fptr, filesize("file.txt"));
echo $val;
fclose($fptr);
