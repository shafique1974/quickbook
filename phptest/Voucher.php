<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<body>
  
<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM Voucher");
echo "<div class='container'>

<h1 class='text-right'>Voucher Posting</h1>
<table class ='table table-hover table-bordered'>
<tr>
<thead class='table-dark'>
<th>Sl No.</th>
<th>Date</th>
<th>Account Name</th>
<th>Debit</th>
<th>Account Name</th>
<th>Credit</th>
<th>Narration</th>
<th>Edit</th>
<th>Add</th>
</tr>
</thead>";

echo "<tbody>";

while($row = mysqli_fetch_array($result))
  {
    echo "<tr class='table-danger'>";
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
  echo "</tbody>";
  echo "</table>";
  echo "</table> </div>";
mysqli_close($con);
?>

</body>
</html>
