<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM cost");


while($row = mysqli_fetch_array($result))
  {
$gt=$row['GrossTurnover'];
$disc=$gt*0.1;
$comm=$gt*0.03;
$netturn=$gt-$disc-$comm;
$vat=$gt*0.055;
$nett = $netturn - $vat ;
$matc=$gt*0.4;
$wages=$gt*0.04;
$manoh=$gt*0.05;
$gm=$nett-$matc-$wages-$manoh;
$adminoh=$row['AdminOH'];
$sndoh=$row['SNDOH'];
$oprofit=$gm-$adminoh-$sndoh;
$finexp=$row['FinExp'];
$pbtax=$oprofit-$finexp;
$itax=$gt*0.02;
$patax=$pbtax-$itax;
  echo "Gross Turnover :" . $gt . "<br> "."Discount :".$disc ."<br>"."Commission :".$comm . "<br>"."Net Turnover Including VAT : ". $netturn . "<br>" . "VAT :" . $vat . "<br>". "Net Turnover :" . $nett . "<br>" ."Material Consumption :" . $matc ."<br>" . "Wages :" . $wages ."<br>"."Manufacturing Overhead :".$manoh."<br>"."GM :".$gm."<br>"."Admin Overhead :".$adminoh."<br>"."S&D Overhead :".$sndoh."<br>"."Operating Profit :".$oprofit."<br>"."Financial Expenditure :".$finexp."<br>"."Profit before Tax :".$pbtax."<br>"."Income Tax :".$itax."<br>"."Profit after Tax :".$patax;
  }

mysqli_close($con);
?>