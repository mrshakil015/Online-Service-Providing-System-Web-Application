<?php
session_start();
$dbHost = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbName = "txservicehand";




$conn = mysqli_connect($dbHost, $dbUsername, $dbpassword, $dbName);

if(!$conn){
    die("Database connection failed!");
}
?>


