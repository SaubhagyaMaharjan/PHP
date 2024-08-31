<!-- Write a php program to find area of rectangle by using user input. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="area.php" method="post">
    Number 1:<br>
    <input type = "number" name="n1" id="n1" value=n1><br>
    Number 2:<br>
    <input type = "number" name="n2" id="n2" value=n2><br>
    <input type ="Submit" id="submit"  value="submit"><br>
    Area of rectangle:<br>
    <input type ="number" id="result" value="<?php echo $_GET['result'];?>">
</form>
 </body>
</html>
