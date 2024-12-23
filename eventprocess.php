<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input
   
 $event= $_POST["eventno"];
 $clubname= $_POST["clubname"];
 $time= $_POST["time"];
 $venue= $_POST["venue"];
 $date= $_POST["date"];

    // Connect to your database (replace with your database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "javapoint";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the table (replace 'your_table' with your actual table name)
    $sql = "INSERT INTO event VALUES('$eventno','$clubname','$time','$venue','$date')";

    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
header("Location: club.html");

    // Close the database connection
    $conn->close();
}
?>
