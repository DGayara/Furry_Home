<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    echo "<script> alert('Invalid request: You must be logged in to send messages');
          window.history.back(); </script>";
    exit;
}

$user_id = $_SESSION['user_id'];

$host = "localhost";
$username = "root";       
$password = "";           
$database = "furry_friends";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Sanitize form input
$name = htmlspecialchars(trim($_POST["name"]));
$email = htmlspecialchars(trim($_POST["email"]));
$subject = htmlspecialchars(trim($_POST["subject"]));
$message = htmlspecialchars(trim($_POST["message"]));

// Prepare SQL statement
$sql = "INSERT INTO contact(user_id, name, email, subject, message)
        VALUES (?,?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $user_id, $name, $email, $subject, $message);

if ($stmt->execute()) {
    echo "<script>alert('Message send successfully!'); window.history.back();</script>";
} else {
    echo "<script>alert('Error saving message.'); window.history.back();</script>";
}

// Close connection
$stmt->close();
$conn->close();
?>
