<?php
// Database connection details
$servername = "localhost"; // Change this to your MySQL server address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "javapoint"; // Change this to your MySQL database name

// Create connection
$conn = new mysqli("localhost", "root", "", "javapoint");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username, password, and user type from form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    // Validate username and password
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password' AND usertype='$usertype'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        // Authentication successful, redirect users based on their user type
        switch ($usertype) {
            case 'Admin':
                // Redirect student to student page
                header("Location: admin.html");
                break;
            case 'Student':
                // Redirect teacher to teacher page
                header("Location: student.html");
                break;
            case 'Guest':
                // Redirect admin to admin page
                header("Location: guest.html");
                break;
            default:
                // Invalid user type
                header("Location: login.html");
                break;
        }
        exit();
    } else {
        // If authentication fails, redirect back to the login page
        header("Location: login.html");
        exit();
    }
}

// Close connection
$conn->close();
?>