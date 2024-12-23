<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";
// Create connection
 $con=new mysqli("localhost","root","","javapoint");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"]=="POST")
{
$name = $_POST["name"];
$regno = $_POST["regno"];
$marks = $_POST["marks"];
$eventname = $_POST["eventname"];
$sql="INSERT INTO guest VALUES('$name','$regno','$marks','$eventname')";
if($con ->query($sql)===TRUE)
{
echo"new record created successfully";
}
else
{
echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("Location:mark.php");
?>

