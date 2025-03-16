<?php
// Assuming your database credentials
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check if the user exists
if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid username or password!";
}

// Close connection
$conn->close();
?>
