<?php
// Create connection
$con=mysqli_connect("127.0.0.1","root");;
// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQLssssss: " . mysqli_connect_error(); 
  }
mysqli_close($con);
?>
