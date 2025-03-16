<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $servername = "localhost";
    $username = "root"; // Default username for XAMPP MySQL
    $password = ""; // Default password for XAMPP MySQL
    $database = "signup_demo"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    // Set parameters and execute
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    $stmt->execute();

    echo "New record created successfully";

    // Close statement and connection
    $stmt->close();
    $conn->close();
    header("location:login.html");
}
?>
