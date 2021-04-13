<html>
	<head>
		<script>
			function shafique111()
			{
				alert("Hi Shafique,  Welcome to JavaScript");
				alert("This is a test");
				var test123 = "
				<?php 
				
				shafique(); 
				
				?>";
			}
		</script>
	</head>
	
	<body>
		<form>
				<input type="button" value="Click Me Please!" onclick=shafique111(); />
		</form>

<?php

function my_money_format($number) 
{ 
$negative=null;
$thousands=null;

    if(strstr($number,"-")) 
    { 
        $number = str_replace("-","",$number); 
        $negative = "-"; 
    } 
    
    $split_number = @explode(".",$number); 
    
    $rupee = $split_number[0]; 
    $paise = @$split_number[1]; 
    
    if(@strlen($rupee)>3) 
    { 
        $hundreds = substr($rupee,strlen($rupee)-3); 
        $thousands_in_reverse = strrev(substr($rupee,0,strlen($rupee)-3)); 
        for($i=0; $i<(strlen($thousands_in_reverse)); $i=$i+2) 
        { 
        if ((strlen($thousands_in_reverse))==$i+1)
		{
			// echo $i."Take a break"."<br>";
			$thousands .= $thousands_in_reverse[$i];	
		break;
		}       
	
	$thousands .= $thousands_in_reverse[$i].$thousands_in_reverse[$i+1].","; 
	
	} 
        $thousands = strrev(trim($thousands,",")); 
        $formatted_rupee = $thousands.",".$hundreds; 
        
    } 
    else 
    { 
        $formatted_rupee = $rupee; 
    } 
    
    $formatted_paise = ".00";

    if((int)$paise>0) 
    { 
        $formatted_paise = ".".substr($paise,0,2); 
    } 
    
    return $negative.$formatted_rupee.$formatted_paise; 

}


function shafique()
{
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM cost");

echo "<table border='3'>
<tr>
<th>Budget for the Year 2015-16</th>
</tr>";

echo "</table>";

echo "<table border='1'>
<tr>
<th>Particulars</th>
<th>Amount</th>
<th>Percentage</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
$amount[1]=$gt=$row['GrossTurnover'];
$amount[2]=$disc=$gt*0.1;
$amount[3]=$comm=$gt*0.03;
$amount[4]=$netturn=$gt-$disc-$comm;
$amount[5]=$vat=$gt*0.055;
$amount[6]=$nett = $netturn - $vat ;
$amount[7]=$matc=$gt*0.4;
$amount[8]=$wages=$gt*0.04;
$amount[9]=$manoh=$gt*0.05;
$amount[10]=$gm=$nett-$matc-$wages-$manoh;
$amount[11]=$adminoh=$row['AdminOH'];
$amount[12]=$sndoh=$row['SNDOH'];
$amount[13]=$oprofit=$gm-$adminoh-$sndoh;
$amount[14]=$finexp=$row['FinExp'];
$amount[15]=$pbtax=$oprofit-$finexp;
$amount[16]=$itax=$gt*0.02;
$amount[17]=$patax=$pbtax-$itax;

$particulars[1]="Gross Turnover";
$particulars[2]="Discount";
$particulars[3]="Commission";
$particulars[4]="Net Turnover inclusing VAT";
$particulars[5]="VAT";
$particulars[6]="Net Turnover";
$particulars[7]="Material Consumption";
$particulars[8]="Wages";
$particulars[9]="Manufacturing Overhead";
$particulars[10]="GM";
$particulars[11]="Admin Overhead";
$particulars[12]="S&D Overhead";
$particulars[13]="Operating Profit";
$particulars[14]="Financial Expenditure";
$particulars[15]="Profit before Tax";
$particulars[16]="Income Tax";
$particulars[17]="Profit after Tax";

for ($i=1; $i<=17; $i++)
 { echo "<tr>";
   echo "<td>" . $particulars[$i] . "</td>";
   echo "<td align='right'>".my_money_format($amount[$i])."</td>";
   echo "</tr>";
 }
}
echo "</table>";

mysqli_close($con);

}
?>
</body>
</html>
