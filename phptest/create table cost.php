<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql="CREATE TABLE cost(GrossTurnover FLOAT (16,2),AdminOH FLOAT (16,2),SNDOH FLOAT (16,2),FinExp FLOAT (16,2))";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table cost created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>