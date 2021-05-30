<?php
global $row1;
$con=mysqli_connect("127.0.0.1","root","","my_db");
$con1=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con, "select DName, FORMAT(sum(Debit),0) as dddd from voucher group by Dname");

$result1 = mysqli_query($con1, "select CName, FORMAT(sum(Credit),0) as cccc from voucher GROUP by CName");


echo "<h1>Trial Balance</h1>";

echo "<table border='1'>
<tr>
<th>Account Name</th>
<th>Account Name</th>
<th>Debit</th>
<th>Credit</th>
<th>Details</th>
</tr>";

while($row = mysqli_fetch_array($result) or $row1 = mysqli_fetch_array($result1))
  {
  echo "<tr>";
  //echo "<td>" . $row['id'] . "</td>";
  //echo "<td>" . $row['PDate'] . "</td>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "<td>" . $row1['CName'] . "</td>";
  echo "<td>" . $row['dddd'] . "</td>";
  //echo "<td>" . $row['CName'] . "</td>";
  echo "<td>" . $row1['cccc'] . "</td>";
  //echo "<td>" . $row['Narration'] . "</td>";
  //echo "<td>" . "<a href=VEdit.php?cos_id=".$row['id'].">Edit</a>" . "</td>";
  echo "<td>" . "<a href=VAdd.php>Details</a>" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
mysqli_close($con1);

?>