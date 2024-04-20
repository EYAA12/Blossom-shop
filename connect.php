<?php

$host = "localhost";
$port = "3307";
$username = "root";
$password = "";
$db = "blossom"; // Removed the extra space

// Create connection
$conn = new mysqli($host, $username, $password, $db , $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo '<script>console.log("Base Connectée")</script>';
}
?>
