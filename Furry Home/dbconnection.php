<?php
$host = "localhost";
$username = "root";       
$password = "";           
$database = "furry_friends";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
}

?>