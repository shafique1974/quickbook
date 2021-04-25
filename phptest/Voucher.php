<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Voucher");

echo "<table border='1'>
<tr>
<th>Sl No.</th>
<th>Date</th>
<th>Account Name</th>
<th>Debit</th>
<th>Account Name</th>
<th>Credit</th>
<th>Narration</th>
<th>Edit</th>
<th>Add</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['PDate'] . "</td>";
  echo "<td>" . $row['DName'] . "</td>";
  echo "<td>" . $row['Debit'] . "</td>";
  echo "<td>" . $row['CName'] . "</td>";
  echo "<td>" . $row['Credit'] . "</td>";
  echo "<td>" . $row['Narration'] . "</td>";
  echo "<td>" . "<a href=VEdit.php?cos_id=".$row['id'].">Edit</a>" . "</td>";
  echo "<td>" . "<a href=VAdd.php>Add</a>" . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>