<!-- Write a PHP program to create a simple calculator using functions. -->


<!-- PHP code -->
<?php
$error = "";
$x="";
$y="";
$result="";
if(isset($_GET['operation'])){
    $x = $_GET['n1'];
    $y = $_GET['n2'];
    $opr = $_GET['operation'];

    if(is_numeric($x) && is_numeric($y))
    {
 switch($opr)
    {
        case 'Addition':$result =$x + $y;
     break;
       case 'Subtract':$result =$x - $y;
     break;
       case ' Product':$result =$x * $y;
     break;
       case 'Division':$result =$x / $y;
     break;
    }
    }
    else{
        $error = "Enter the number first";
    }
    
   
}
?>
 
 
 <!-- HTML code -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
   <h1>
    <?php if($_GET['n1']=="" && $_GET['n2']=="") 
   {
    echo $error;
   }
   ?>
   </h1>
   <form action="#" method ="get">
<!-- Number 1 -->
    <div>
        <label for="n1">Number 1:</label>
        <input type="number" name="n1" id="n1"  >
</div>
<!-- Number 2 -->
   <div>
        <label for="n2">Number 2:</label>
        <input type="number" name="n2" id="n2">
</div>
<!-- Result -->
   <div>
        <label for="result">Result:</label>
        <input type="number" id="result" disabled value="<?php echo $result ?>">
</div>
<!-- Operation -->
   <div>
        <input type="Submit" value="Addition" name="operation">
        <input type="Submit" value="Subtract" name="operation"><br>
        <input type="Submit" value=" Product" name="operation">
        <input type="Submit" value="Division" name="operation">
</div>



</body>
</html>