<?php
$servername = "localhost";
$username = "username";
$password = "password";
$database = "demo";

// Create connection
$conn = mysqli_connect("localhost", "root","Umasri@123",'demo');

// Check connection
if (!$conn) {
    die(" DataBase Connection failed: ".mysqli_connect_error());
}
?>
