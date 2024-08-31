<!-- Write a PHP program to find the greatest number among three numbers. -->
<?php
$a=5;
$b=9;
$c=2;

if($a>$b && $b>$c)
{
    echo"A is greatest.";
}
elseif($b>$a && $b>$c)
{
    echo"B is greatest.";
}

else{
    echo"C is greatest.";
}

?>