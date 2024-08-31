
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        FirstName:<input type = "text" name="fname"><br>
        LastName:<input type="text" name="lname"><br>
        Address:<input type="text" name="add"><br>
        <input type="submit" value="Submit">
</form>
<?php

$nam=$_GET['fname'];
$lnam=$_GET['lname'];
$ad=$_GET['add'];
echo"Name=$nam";

?>

