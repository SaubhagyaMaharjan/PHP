<?php
session_start();
if (isset($_SESSION['fname'])) {

    echo "Your name is " . $_SESSION['fname'] . "<br>";
    echo "Color is " . $_SESSION['col'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="destroy.php">
        <input type="submit" value="Destroy">
    </form>

</body>

</html>