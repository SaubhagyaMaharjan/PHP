<?php
$cookie_name = "user";
$cookie_value = "Lionel Messi";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
echo "Cookie is set";
