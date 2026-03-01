<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO contact (name, phno, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phno, $email, $message);

// Set parameters
$name = $_GET['name'];
$phno = $_GET['phno'];
$email = $_GET['email'];
$message = $_GET['message'];

// Execute the statement
if ($stmt->execute()) {
    header("location:contact.html");
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
