<!DOCTYPE html>
<html>
<head>
<title>Trial Balance</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!--

<style type="text/css">
  
table {

background: wheat;
}

h1 {
  text-align: center;
}

</style>

-->

</head>
  
<body>


<?php
global $row1;
global $dname;
$con=mysqli_connect("127.0.0.1","root","","my_db");
$con1=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "select DName, FORMAT(sum(Debit),2) as dddd from voucher group by Dname") or die( mysqli_error($con));

$result1 = mysqli_query($con1, "select CName, FORMAT(sum(Credit),2) as cccc from voucher GROUP by CName");




echo "<div class='container'>

<h1 class='text-right'>Trial Balance</h1>

<table class ='table table-hover table-bordered'>
<thead class='table-dark'>
<tr>
<th>Account Name</th>
<th>Debit</th>
<th>Account Name</th>
<th>Credit</th>
<th>Details</th>
</tr>
</thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($result) or $row1 = mysqli_fetch_array($result1))
  {
$fName = $row['DName'];
  echo "<tr class='table-primary'>";
  echo "<td>" . $fName . "</td>";
  echo "<td class='text-end'>" . $row['dddd'] . "</td>";
  echo "<td>" . $row1['CName'] . "</td>";
  echo "<td class='text-end'>" . $row1['cccc'] . "</td>";
  echo "<td>" . "<a href=ACDetails.php?fName=".urlencode($fName).">"."Details</a>" . "</td>";
  echo "</tr>";
  }
echo "</tbody>";
echo "</table> </div>";

mysqli_close($con);
mysqli_close($con1);
?>
</body>