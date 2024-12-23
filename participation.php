<!DOCTYPE>
<html>
<body bgcolor="lightpink">
<h1><center>PARTICIPATION REGISTRATION</center></h1>
<form name="registration" method="POST">
<p><strong>Name:</strong><br /> <input type="text" name="name"></p>
<p><strong>Rollno:</strong><br /> <input type="text" name="rollno"></p>
<p><strong>Class:</strong><br /> <input type="text" name="class"></p>
<p><strong>Eventno:</strong><br /> <input type="text" name="eventno"></p>
<p><strong>Eventname:</strong><br /> <input type="text" name="eventname"></p>
<input type="submit" name="ok">
<?php
 
 //database connection code
   $con=mysqli_connect("localhost","root","","javapoint") or die("not connected");
	//get post records
if(isset($_POST["ok"])){
    $Name = $_POST["name"];
    $Rollno = $_POST["rollno"];
    $Class= $_POST["class"];
    $Eventno = $_POST["eventno"];
    $Eventname = $_POST["eventname"];

$query="INSERT INTO registration VALUES ('$Name', '$Rollno', '$Class', '$Eventno', '$Eventname')";
if(mysqli_query($con, $query))
{
  echo " register succesfully";
 header("Location: student.html");
}
}
 
?>
</form>
</body>
</html>
