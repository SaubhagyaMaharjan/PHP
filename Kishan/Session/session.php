<?php
session_start();
$_SESSION['fname'] = $_POST['fname'];
$_SESSION['col'] = $_POST['col'];
header("location:result.php");
