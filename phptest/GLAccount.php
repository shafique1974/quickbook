<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM AcType");


?>

<html>
<body>

<form action="GLAcInsert.php" method="post">
Account Name : <input type="text" name="firstname">

Account Type : <select name="lastname">

<?php

while($row = mysqli_fetch_array($result))
  {

echo "<option value=".$row['AcType'].">".$row['AcType']."</option>";

  }

mysqli_close($con);
		
?>

	</select>

<input type="submit" value="Save">
</form>

</body>
</html>