<?php
//error handler function
function customError($errno,$errstr)
  {
  echo "<b>Hello there is a Error:</b> [$errno] $errstr";
  }

//set error handler
set_error_handler("customError");

//trigger error
echo($test);
?>