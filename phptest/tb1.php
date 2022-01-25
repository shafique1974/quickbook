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

</head>

<body>
<?php

global $rowx;
global $rowx1;
global $fName;
global $x;
global $y;
global $p;
global $total1;
global $total2;

$total2=0;
$total1=0;

$con=mysqli_connect("127.0.0.1","root","","my_db");
$con1=mysqli_connect("127.0.0.1","root","","my_db");

// Check connection

if (mysqli_connect_errno())
  {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $result = mysqli_query($con, "select DName, sum(Debit) as dddd from voucher group by Dname") or die( mysqli_error($con));


  $result1 = mysqli_query($con1, "select CName, sum(Credit) as cccc from voucher GROUP by CName");



while($rowx = mysqli_fetch_array($result))
{
    if (empty($rowx['DName'])){
        $x = $x + 1 ;
        break;
    }
    $fName[$x]= $rowx['DName'] ;
    $fCcc[$x]=$rowx['dddd'];
    $x = $x + 1 ;

}

while ($rowx1 = mysqli_fetch_array($result1))
{
    if (empty($rowx1['CName'])){
        $y = $y + 1 ;
        break;
    }
    $fCName[$y]= $rowx1['CName'] ;
    $fDdd[$y]=$rowx1['cccc'];
    $y = $y + 1 ;

}



mysqli_close($con);
mysqli_close($con1);
echo "<div class='container'>
<h1 class='text-right'>Trial Balance</h1>
<table class ='table table-hover table-bordered'>
<thead class='table-dark'>
<tr>
<th>Account Name</th>
<th class= 'text-center'>Debit</th>
<th>Account Name</th>
<th class= 'text-center'>Credit</th>
<th>Details</th>
</tr>
</thead>";
echo "<tbody>";

while($p<count($fName))
  {
  echo "<tr class='table-primary'>";
  $fc= $fCName[$p] ?? null;
  $fd= $fDdd[$p] ?? null;
  $fcc=$fCcc[$p] ?? null;
  
  echo "<td>" . $fName[$p] . "</td>";
  echo "<td class='text-end'>" . $fcc. "</td>";
  echo "<td>" . $fc. "</td>";
  echo "<td class='text-end'>" . $fd . "</td>";
  echo "<td>" . "<a href=ACDetails.php?fName=".urlencode($fName[$p]).">"."Details</a>" . "</td>";
  echo "</tr>";
  $total1=$total1+$fcc;
  $total2=$total2+$fd;
  $p++;
}

echo "<tr class='table-danger'>";
echo "<td class='text-end'>" . "Total Debit :" . "</td>";
echo "<td class='text-end'>" . $total1. "</td>";
echo "<td class='text-end'>". "Total Credit : ". "</td>";
echo "<td class='text-end'>" . $total2 . "</td>";
echo "<td>" . "<a href=ACDetails.php"." class='btn btn-info'".">"."Details</a>" . "</td>";

echo "</tbody>";
echo "</table> </div>";

?>

</body>