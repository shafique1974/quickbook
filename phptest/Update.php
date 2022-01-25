<?php
$con=mysqli_connect("localhost","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_query($con,"UPDATE Persons SET Age=54
WHERE FirstName='Peter' AND LastName='Griffin'");
echo "Updated.....";
mysqli_close($con);
?>