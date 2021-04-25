<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM GLAccount");


?>

<html>
<body>

<form action="VInsert.php" method="post">
Date : <input type="date" name="VDate"><br>

Account Name : <select name="acname1">

<?php

while($row = mysqli_fetch_array($result))
  {
$test=$row['AcName'];

echo '<option value=" '.$test. '">'.$test.'</option>';

  }

mysqli_close($con);

echo $test;

?>

	</select><br>
Debit : <input type="number" name="debit"><br>

<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM GLAccount");


?>



Account Name : <select name="acname2">

<?php

while($row = mysqli_fetch_array($result))
  {
$test=$row['AcName'];

echo '<option value=" '.$test. '">'.$test.'</option>';

  }

mysqli_close($con);
		
?>

	</select><br>
Credit : <input type="number" name="credit"><br>

Narration : <input type="text" name="narration"><br>


<input type="submit" value="Save">
</form>

</body>
</html>