<?php

echo "<script type='text/javascript' src='jquery-1.11.2.min.js'></script>";
echo "<script type='text/javascript' src='jquery.maskedinput-1.3.js'></script>";

echo "<script type='text/javascript'> 

jQuery(function($){
$('#mobile').mask('+8809999-999999');
}); 


</script>";

echo "<input type='text' id='mobile' />";

?>
