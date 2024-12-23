<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";

// Create connection
 $conn=new mysqli("localhost","root","","javapoint");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Write the SQL query
$sql = "SELECT * FROM suggestion";
$result = mysqli_query($conn, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0)
{
    echo "<h2>SUGGESTIONS&FEEDBACK DETAILS</h2>";
   echo "<table border=2>";
    echo "<tr>";
    echo "<th>name</th>";
    echo "<th>suggestion</th>";
    echo "<th>feedback</th>";
    echo "</tr>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo"<table border=2>";
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" .$row["suggestion"]."</td>";
echo "<td>" .$row["feedback"]."</td>";
echo"</tr>";
echo"</br>";
echo"</table>";  
}
}
?><br>
<html>
<head>

<a href="admin.html">Back</a>
</head>
</html>
