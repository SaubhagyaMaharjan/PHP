 <!-- Write a PHP program to check if the input number is Palindrome or not -->

<?php
$n = 565;
$rev = strrev($n);
if($n==$rev){
    echo "$n is a Palindrome.";
}
else{
    echo"$n is not a Palindrome.";
}

?>

