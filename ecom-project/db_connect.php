<?php
// Database configuration
$servername = "localhost";
$username = "admin";
$password = "8827";
$database = "ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
