<?php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Get the submitted username, password, and role
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

// SQL query to insert new user into the database
$sql = "INSERT INTO login (username, password, role) VALUES ('$username', '$password', '$role')";

if ($con->query($sql) === TRUE) {
    echo "Registration successful!";
	 header("Location: login.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$con->close();

?>