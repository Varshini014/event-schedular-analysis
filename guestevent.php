<html>
<head><title>Gobi arts & science </title></head>
<body bgcolor="bccs">
<center>
<h1>Department of Computer Science</h1>
<h2>Event details</h2>
</body>

<?php
// Include database connection
 $con=mysqli_connect("localhost","root","","javapoint") or die("not connected");

// Fetch user data from MySQL table
$sql = "SELECT * FROM event";
$result = mysqli_query($con, $sql);

// Check if any results were found
if (mysqli_num_rows($result) > 0)
{
    echo "<h2>EVENT DETAILS</h2>";
   echo "<table border=2>";
    echo "<tr>";
    echo "<th>EventNo</th>";
    echo "<th>ClubName</th>";
    echo "<th>Date</th>";
    echo "<th>Venue</th>";
    echo "<th>Time</th>";
    echo "<th>EventName</th>";
    echo "<th>Mode</th>";
    echo "</tr>";
echo"</table>";


echo "<ul>";
while ($row = mysqli_fetch_assoc($result)) {
echo "<table border=2><tr>";
echo "<td> " . $row['eventno'] . "</td>";
echo "<td> " . $row['clubname'] . "</td>";
echo "<td> " . $row['date'] . "</td>";
echo "<td> " . $row['venue'] . "</td>";
echo "<td> " . $row['time'] . "</td>";
echo "<td> " . $row['eventname'] . "</td>";
echo "<td> " . $row['mode'] . "</td>";
echo "</tr></table>";
  }
echo "</ul>";
}

// Close database connection

?>
<br><br>
<a href="guest.html">Home</a>
</center>
</html>