<html> <head> 
<title>Arithmetic Operators for PHP</title>
</head>
<Body> <form name="form1" method="post" action="Input.php"> 
sum1 <input name="sum1" type="text"><br>
sum2 <input name="sum2" type="text"><br>
sum3 <input name="sum3" type="text"><br>
<input type="submit" name="submit" value="Sum"><br>
</form>
<?php
$sum1=$_POST['sum1']; 
$sum2=$_POST['sum2']; 
$sum3=$_POST['sum3']; 
$total_sum=$sum1+$sum2+$sum3; 
echo $total_sum; 
?> 
</body> 
</html>