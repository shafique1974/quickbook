<html>
<body>

<?php
$conn=odbc_connect('Oracle1','scott','tiger');
if (!$conn)
  {exit("Connection Failed: " . $conn);}
$sql="SELECT * FROM emp, dept where dept.deptno=emp.deptno order by emp.deptno";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in SQL");}
echo "<table border='1'><tr>";
echo "<th>Employee Name</th>";
echo "<th>Job</th>";
echo "<th>Department No.</th>";
echo "<th>Department Name</th>";
echo "<th>Location</th></tr>";
while (odbc_fetch_row($rs))
  {
  $compname=odbc_result($rs,"ename");
  $cjob=odbc_result($rs,"job");
  $conname=odbc_result($rs,"deptno");
  $dname=odbc_result($rs,"dname");
  $loc=odbc_result($rs,"loc");
  echo "<tr><td>$compname</td>";
  echo "<td>$cjob</td>";
  echo "<td>$conname</td>";
  echo "<td>$dname</td>";
  echo "<td>$loc</td></tr>";
  }
odbc_close($conn);
echo "</table>";
?>

</body>
</html>