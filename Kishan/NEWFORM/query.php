<?php
include("dateconn.php");

$name = $_POST['name'];
$pass = $_POST['pass'];

$sql = "INSERT INTO `login` (`ID`, `Username`, `Password`, `Date`) VALUES (NULL, '$name', '$pass', '2024-06-19 10:33:49.000000')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("location:login.php");
} else {
    echo "Data is not inserted successfully.";
}
