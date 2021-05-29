<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT DName, sum(Debit) as Debit, sum(Credit) as Credit FROM Voucher group by DName");


echo "<h1>Trial Balance</h1>";

echo "<table border='1'>
<tr>
<th>Account Name</th>
<th>Debit</th>
<th>Credit</th>
<th>Details</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  //echo "<td>" . $row['id'] . "</td>";
  //echo "<td>" . $row['PDate'] . "</td>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "<td>" . $row['Debit'] . "</td>";
  //echo "<td>" . $row['CName'] . "</td>";
  echo "<td>" . $row['Credit'] . "</td>";
  //echo "<td>" . $row['Narration'] . "</td>";
  //echo "<td>" . "<a href=VEdit.php?cos_id=".$row['id'].">Edit</a>" . "</td>";
  echo "<td>" . "<a href=VAdd.php>Details</a>" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>