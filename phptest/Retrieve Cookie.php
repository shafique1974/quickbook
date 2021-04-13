<?php
//setcookie("user", "Shafique Uddin", time()+3600);
// Print a cookie
//echo $_COOKIE["user"];
//setcookie("user", "", time()-3600);
// A way to view all cookies
//print_r($_COOKIE);
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br>";
else
  echo "Welcome guest!<br>";
?>