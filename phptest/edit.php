<?php
$con=mysqli_connect("127.0.0.1","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$user= $_GET['cos_id'];

$result = mysqli_query($con,"SELECT * FROM Persons where ID='$user'");


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Edit</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<form action='update1.php' method='GET'>";
  echo "<input type='text' hidden name='ffname' value=" . $row['ID'] . ">";
  echo "<td>" . "<input type='text' name='fname' value=" . $row['FirstName'] . ">"."</td>";
  echo "<td>" . "<input type='text' name='lname' value=" . $row['LastName'] . ">"."</td>";
  echo "<td>" . "<input type='text' name='age' value=" . $row['Age'] . ">"."</td>";
  echo "<td>" . "<input type='submit' name='update' value='Update' ".">" . "</td>";
  echo "</form>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

echo '<script type="text/javascript">
function shikkhok()
{

alert("Welcome to Sikkhok.com");


/* window.open("Update1.php?cos_id=Jamil","_self"); */

}
</script>';



?>