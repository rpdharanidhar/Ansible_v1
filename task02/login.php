<?php
// Database connection parameters
$servername = "localhost";
$username = "dharani";
$password = "dharani";
$dbname = "people";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve email and password from form
$email = $_POST['email'];
$password = $_POST['password'];

// Query to validate email and password
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful";
} else {
    // Login failed
    echo "Invalid email or password";
}

$conn->close();
?>
