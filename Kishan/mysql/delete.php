<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webii";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

$sql="DELETE FROM mydetails WHERE id = 6";

if($conn->query($sql)===TRUE)
{
    echo " Record is deleted successfully";
}
else{
    echo"Error:".$sql ."<br>" .$conn->error;
}
$conn->close();
?>
