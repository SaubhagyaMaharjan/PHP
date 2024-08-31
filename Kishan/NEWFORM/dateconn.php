<?php
$conn = mysqli_connect("localhost", "root", "", "login_data");
if ($conn) {
    echo "Database connected successfully.<br>";
} else {
    die("Database is not connected successfully.<br>");
}
