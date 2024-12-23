<?php      
    $hostname = "localhost";  
    $username = "root";  
    $password = "";  
    $db_name = "javapoint";  
      
    $con = mysqli_connect("localhost","root","","javapoint");  
    if(mysqli_connect_errno()) {  
        echo"Failed to connect with MySQL: ". mysqli_connect_error();  
    }  
?>  
