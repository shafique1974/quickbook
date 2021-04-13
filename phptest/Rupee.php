<?php 

echo my_money_format(123456789123.58);



function my_money_format($number) 
{ 
$negative=null;
$thousands=null;

    if(strstr($number,"-")) 
    { 
        $number = str_replace("-","",$number); 
        $negative = "-"; 
    } 
    
    $split_number = @explode(".",$number); 
    
    $rupee = $split_number[0]; 
    $paise = @$split_number[1]; 
    
    if(@strlen($rupee)>3) 
    { 
        $hundreds = substr($rupee,strlen($rupee)-3); 
        $thousands_in_reverse = strrev(substr($rupee,0,strlen($rupee)-3)); 
        for($i=0; $i<(strlen($thousands_in_reverse)); $i=$i+2) 
        { 
        if ((strlen($thousands_in_reverse))==$i+1)
		{
			// echo $i."Take a break"."<br>";
			$thousands .= $thousands_in_reverse[$i];	
		break;
		}       
	
	$thousands .= $thousands_in_reverse[$i].$thousands_in_reverse[$i+1].","; 
	
	} 
        $thousands = strrev(trim($thousands,",")); 
        $formatted_rupee = $thousands.",".$hundreds; 
        
    } 
    else 
    { 
        $formatted_rupee = $rupee; 
    } 
	$formatted_paise = ".00";    

    if((int)$paise>0) 
    { 
        $formatted_paise = ".".substr($paise,0,2); 
    } 
    
    return $negative.$formatted_rupee.$formatted_paise; 

} 
?>