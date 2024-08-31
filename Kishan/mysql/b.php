<?php
$servername = "localhost";
$username = "root";
$password = "";
//create connection 
$conn = new mysqli($servername,$username,$password);

//check connection 
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
//create database
$sql = "CREATE DATABASE WebII";
if($conn->query($sql)===TRUE)
{
    echo"Datebase created successfully.";

}
else{
    echo"Error creating database:".$conn->error;
}
$conn->close();
?>