<html>
<head>
</head>
<body bg color="9989">
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

// Get data from form
$name = $_POST['name'];
$photo_tmp_name = $_FILES['photo']['tmp_name'];

//
$target_file = "uploads";

move_uploaded_file($photo_tmp_name, $target_file);
$target_file=$target_file.$_FILES['photo']['name'];
// Store data and photo path in MySQL
$sql = "INSERT INTO uploads (name, photo_path) VALUES ('$name', '$target_file')";

if ($con->query($sql) === TRUE)
 {
    echo "Data and photo uploaded successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$con->close();
?>
<center>
<br><br>
<a href="admin.html"><font=italic>home</a></font>
</canter>
</body>
</html>

