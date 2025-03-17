<?php
$host = "localhost"; // Server
$user = "root";  // Database username
$pass = "";      // Database password (leave empty if using XAMPP)
$dbname = "search_engine"; // Database name

$conn = new mysqli($host, $user, $pass, $dbname); // Create connection

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    //echo "Connected successfully";
}
?>
