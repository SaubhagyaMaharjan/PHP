<?php
$a=$_POST['aa'];
$b=$_POST['bb'];
$c=$_POST['cc'];

if($a>$b && $a>$c)
{
    echo"A is Greatest<br>";
}
else if($b>$a && $b>$c)
{
    echo"B is Greatest<br>";
}
else 
{
    echo"C is Greatest<br>";
}
?>