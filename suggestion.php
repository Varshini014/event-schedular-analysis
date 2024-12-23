<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";
// Create connection
 $conn=new mysqli("localhost","root","","javapoint");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$name = $_POST["name"];
$suggestion = $_POST["suggestion"];
$feedback = $_POST["feedback"];
$sql="INSERT INTO suggestion VALUES('$name','$suggestion','$feedback')";
if($conn ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location:suggestion1.php");
?>
