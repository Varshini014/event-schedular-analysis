<html>
<body bgcolor="skyblue">
<center>
<h1>Scheduled succesfully.......!!!!!</h2>
</center>


<?php
// Include database connection
 $con=mysqli_connect("localhost","root","","javapoint") or die("not connected");
	//get post records
// Retrieve user input from form
$Eventno = $_POST['eventno'];
$ClubName = $_POST['clubname'];
$Date = $_POST['date'];
$Venue = $_POST['venue'];
$Time = $_POST['time'];
$Mode = $_POST['mode'];

// Insert user data into MySQL table
$query = "INSERT INTO meeting (eventno,clubname,date,venue,time,mode) VALUES ('$Eventno', '$ClubName', '$Date', '$Venue', '$Time', '$Mode')";
$result = mysqli_query($con, $query);

if ($result) {
    echo "";
} else {
    echo "Error: " . mysqli_error($con);
}
// Close database connection

?>
<center><bold>
<a href="admin.html">HOME</a><br></bold>
</center>
</body>
</head>

