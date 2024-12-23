<?php
// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";

$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Retrieve data and photo from MySQL
$sql = "SELECT * FROM uploads";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. "<br>";
        echo '<img src="' . $row["photo_path"] . '" width="300" height="200">';
        echo "<br>";
    }
} else {
    echo "0 results";
}

$con->close();
?>