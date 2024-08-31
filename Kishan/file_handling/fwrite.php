<?php
$fp = fopen("newfile.txt", "w");
echo "New file is created successfully.<br>";
fwrite($fp, "Welcome to my new page.I am not a programmer");
