<?php
$_servername = "db";
$username = "amrit";
$password = "kandel";
$dbname = "amrit";
//creating connection
$conn = new mysqli($_servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
    die("connection fail:" .$conn->connect_error);
    
}
?>