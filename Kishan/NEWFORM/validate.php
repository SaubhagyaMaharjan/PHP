<?php
session_start();
include("dateconn.php");
$name = $_POST['name'];
$pass = $_POST['pass'];
$sql = "SELECT * FROM login WHERE `Username` = '$name'  AND `Password` = '$pass';";
$result = mysqli_query($conn, $sql);
$x = mysqli_fetch_object($result);
$p = $x->Username;
$q = $x->Password;

if ($p == $name && $q == $pass) {
    $_SESSION["username"] = $name;
    header("Location: welcome.php");
    exit();
} else {
    echo "Invalid username or password";
}
// Close the connection
mysqli_close($conn);
