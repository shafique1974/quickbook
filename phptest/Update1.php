<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$user2 = $_GET['ffname'];


$fname=$_GET['fname'];
$lname=$_GET['lname'];
$age=$_GET['age'];

$sql="UPDATE Persons SET FirstName='$fname', LastName='$lname', Age='$age' where ID='$user2' ";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);

echo"<script>window.open('Select In Table.php','_self')</script>";
?>
