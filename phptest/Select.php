<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Persons");

while($row = mysqli_fetch_array($result))
  {
  echo "Name : " . $row['FirstName'] . " " . $row['LastName'] . ", Age :" . $row['Age'];
  echo "<br>";
  }

mysqli_close($con);
?>