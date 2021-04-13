<html>
<head>
<title>My first page in PHP.</title>
</head>
<body>

Current date : <?php print(date("l F d, Y"));
$sql = "select * from addressbook LIMIT 0, 30 ";
echo $sql
?>

</body>
</html>