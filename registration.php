<!DOCTYPE>
<html>
<body bgcolor="lightpink">
<style> 
  body {
  background-image: url("event.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
background-size:1370px;610px;
}
table{margin-top:300px;
margin-left:500px;
}
</style>
<h1><center>CLUB REGISTRATION</center></h1>
<form name="student" method="POST">
<center><table width="250" height="200" style="border-radius:25px;margin-top:150px;">
<tr><th colspan="4"><b><font size="6" color="red">Login</font></b></th></tr>
<p><strong>Registerno:</strong><br /> <input type="text" name="registerno"></p>
<p><strong>Name:</strong><br /> <input type="text" name="name"></p>
<p><strong>Class:</strong><br /> <input type="text" name="class"></p>
<p><strong>Clubname:</strong><br /> <input type="text" name="clubname"></p>
<input type="submit" name="ok">
<?php
 
 //database connection code
   $con=mysqli_connect("localhost","root","","javapoint") or die("not connected");
	//get post records
if(isset($_POST["ok"])){
    $Registerno = $_POST["registerno"];
    $Name = $_POST["name"];
    $Class= $_POST["class"];
    $Clubname = $_POST["clubname"];

$query="INSERT INTO student VALUES ('$Registerno', '$Name', '$Class', '$Clubname')";
if(mysqli_query($con, $query))
{
  echo "registration succesfully";
 header("Location: student.html");
}
}

 
?>
</form>
</body>
</html>
