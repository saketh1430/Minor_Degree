<?php
$servername = "localhost"; // Your local server name
$username = "root"; // Your username for the server
$password = ""; // Your password for the server
$dbname = "student_database"; // Your database name

// Create a connection object
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
