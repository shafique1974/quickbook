<?php

echo "<script type='text/javascript' src='jquery.js'></script>";
echo "<script type='text/javascript' src='jqueryMaskedInput.js'></script>";

echo "<script type='text/javascript'> 
jQuery(function($){
$('#mobile').mask('8899999-999999');
}); 
</script>";

echo "<input type='text' id='mobile' />";

?>
