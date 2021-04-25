<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO glaccount (AcName, AcType)
VALUES
('$_POST[firstname]','$_POST[lastname]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";
echo"<script>window.open('GLAccount.php','_self')</script>";
mysqli_close($con);
?>