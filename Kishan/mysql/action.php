<?php

$fname = $_POST['myfname'];
$lname = $_POST['mylname'];
$email = $_POST['myemail'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webii";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mydetails(firstname, lastname ,email)values('$fname','$lname','$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record is created successfully";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
