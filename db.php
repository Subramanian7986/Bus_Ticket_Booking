<?php
$host = 'localhost';  // Database host (localhost)
$user = 'root';       // Database username
$password = '';       // Database password (default is empty for XAMPP)
$dbname = 'final';  // Database name

$conn = new mysqli($host, $user, $password, $dbname);

// Check for connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
