<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO voucher (PDate, Dname, Debit, Cname, Credit, Narration)
VALUES
('$_POST[VDate]','$_POST[acname1]','$_POST[debit]','$_POST[acname2]','$_POST[credit]','$_POST[narration]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
mysqli_close($con);
echo "1 record added";
echo"<script>window.open('Voucher.php','_self')</script>";
?>