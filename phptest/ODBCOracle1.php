<html>
<body>

<?php
$conn=odbc_connect('Oracle1','scott','tiger');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM emp";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table><tr>";
echo "<th>Employee Name</th>";
echo "<th>Department No.</th></tr>";
while (odbc_fetch_row($rs))
  {
  $compname=odbc_result($rs,"ename");
  $conname=odbc_result($rs,"deptno");
  echo "<tr><td>$compname</td>";
  echo "<td>$conname</td></tr>";
  }
odbc_close($conn);
echo "</table>";
?>

</body>
</html>