<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="webii";
//create connection 
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("Connection failed:".$conn->connect_error);
}
$sql="INSERT INTO MyDetails(firstname , lastname, email)
values('John','Maharjan','john@gmail.com')";
$sql="INSERT INTO MyDetails(firstname , lastname, email)
values('Jigri','Maha','jigei@gmail.com')";

if($conn->query($sql)===TRUE)
{
    echo"New record created successfully";
}
else{
    echo"Error:".$sql."<br>".$conn->error;
}
$conn->close();
?>