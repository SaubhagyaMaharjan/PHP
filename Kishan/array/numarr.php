<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to my index.</br>
<?php
$arr= array("Mango" , "Apple",10 ,30.4);
for($i=0;$i<=3;$i++)
{
echo "$arr[$i]<br>";
}

$car = array("brand"=>"Rolls Royace", "model"=>"RRR","year"=>1970);
echo $car["model"],"<br>";
foreach ($car as $x=>$y)
{
    echo"$x:$y<br>";
}
$arrr = array(array(1,2,3),array(4,5,6),array(7,8,9));
echo $arrr[0][0],"<br>";
for($row=1;$row<4;$row++)
{
    echo $row;
}

//multidimentional array (extract)
$anim = array("d"=>"deer","l"=>"lion","a"=>"apple","t"=>"tiger");
extract($anim);
echo"<br>",$d ,"<br>",$l,"<br>",$t ,"<br>",$a;

//compact
$d ="deer";
$l ="lion";
$t ="tiger";
$a=compact("d","l","t");
print_r($a);
echo"<br>";

//explode function
$str = "Welcome to my page.I love creating web page";
print_r(explode(" ",$str));
$res= (explode(" ",$str));
echo"<br>" ,$res[3];

?>
</body>
</html>