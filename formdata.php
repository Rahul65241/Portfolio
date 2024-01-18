<?php
// Database connection details
$host = "localhost";
$user = "root";
$password = "";
$database = "portfoliocontactform"; 

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// SQL query to insert data into the database
$sql = "INSERT INTO contact_form (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject', '$message')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Data inserted successfully');</script>";
    echo "<script>window.location.href='index.html';</script>";} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
