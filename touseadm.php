<?php

$servername = "localhost"; 
$username = "username";
$password = "password";
$database = "database";

//Create a connection
$conn = new mysqli($servername, $username, $password, $database);

//Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>