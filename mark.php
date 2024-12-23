 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "javapoint";

// Create connection
 $con=new mysqli("localhost","root","","javapoint");

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Write the SQL query
$sql = "SELECT * FROM guest";
$result = mysqli_query($con, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0)
{
    echo "<h2>MARKING DETAILS</h2>";
   echo "<table border=10>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Regno</th>";
    echo "<th>EventName</th>";
    echo "<th>Marks</th>";
    echo "</tr>";
echo"</table>";

    // Loop through each row of data
    while($row = mysqli_fetch_assoc($result))
{echo"<table border=2>";
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" .$row["regno"]."</td>";
	echo "<td>" .$row["eventname"]."</td>";
	echo "<td>" .$row["marks"]."</td>";
	echo"</tr>";
	echo"</br>";
	echo"</table>";  
}
}
?>
<html>
<head>
<a href="guest.html">Back</a>
</head>
</html>
