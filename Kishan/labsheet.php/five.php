<!-- Write a PHP program to check if the input number is Armstrong or not. -->

<?php
$a = 153;
$b = $a;
$sum=0;
while($a>0){
    $d=$a%10;
    $sum=$sum+pow($d,3);
    $a=$a/10;
}
if($sum==$b){
    echo"$b is an armstrong number.";
}
else{
    echo"$b is not an armstrong number.";
}
?>