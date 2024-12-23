
<?php

// Start session
session_start();

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

// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the username and password match
$sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Login successful, set session variables
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $row['role'];
    
    // Redirect based on role
    switch ($_SESSION['role']) {
        case "admin":
		 // Admin has access to all pages
            header("Location: admin.html");
            break;
        case "student":
            header("Location: student.html");
            break;
        case "guest":
            header("Location: guest.html");
            break;
        case "club":
		// club has access to club pages
            header("Location: club.html");
            break;
        
    }
} else {
    // Login failed
    echo "Invalid username or password. Please try again.";
}

$con->close();

?>
