<!-- Write a PHP program to reverse input numbers. -->

<?php
$rev = 0;
$num = 12345;
while($num > 1) {
       $rev=$rev * 10;
       $rev = $rev + $num % 10;
       $num = ($num/10);
       
}
echo"Reverse number is : $rev"; 
?>
