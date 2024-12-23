<html>
<head><title>Gobi arts & science </title></head>
<body bgcolor="pink">
<center>
<h1>Department of Computer Science</h1>
<h2>Meeting details</h2>
</body>

<?php
// Include database connection
 $con=mysqli_connect("localhost","root","","javapoint") or die("not connected");

// Fetch user data from MySQL table
$query = "SELECT * FROM meeting";
$result = mysqli_query($con, $query);

echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<table border=2><tr>";
echo "<td> " . $row['eventno'] . "</td>";
echo "<td> " . $row['clubname'] . "</td>";
echo "<td> " . $row['date'] . "</td>";
echo "<td> " . $row['venue'] . "</td>";
echo "<td> " . $row['time'] . "</td>";
echo "<td> " . $row['mode'] . "</td>";
echo "</tr></table>";
  }
echo "</ul>";

// Close database connection

?>
<a href=club.html>Home</a>
</center>
</html>