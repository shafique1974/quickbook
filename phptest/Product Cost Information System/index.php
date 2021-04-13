<html>
    <head>
<style>

p {text-indent:60px;
   font-size:20px;
}
  

.textboxclass {
height: 50px;
width: 270px;
}

.text-center {
    text-align: center !important;
}


div#first {
 position:absolute;
 right:220px;
 
 }


</style>
        <title>Product Cost Information System</title>
    </head
<?php 
include('header.php');
?>

    <body>
 <script type="text/javascript">
        $(function() {
            $("#term").focus();
        });
    </script> 
<br /> 
      <br />	
	<div class="container">
    <div class="alert alert-info"><center> <h4>Product Cost Information System </h4></center> </div>
<br />

<table  class="table table-striped table-bordered">
                          
                            <thead>
						
                                <tr>
                                    <th class="text-center">Product ID Number</th>
                                    <th class="text-center">Product Name</th>
									<th class="text-center">Quantity</th>
                                    <th class="text-center">Item Price</th>
                                    <th class="text-center">Total Cost</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
					

 <?php
function money($number)
{
   $decimalplaces = 2;
   $decimalcharacter = '.';
   $thousandseparater = ',';
   return number_format($number,$decimalplaces,$decimalcharacter,$thousandseparater);
}



 $sql = mysql_query("select * ,quantity * item_price as total_cost
     from products Order by prod_name ASC")
   or die('Error in query : $sql. ' .mysql_error());
   
   
if (mysql_num_rows($sql) > 0) 
{            
   $i = 1;
 while ($row = mysql_fetch_array($sql)) {
                // Print out the contents of the entry 
                echo '<tr>';
				echo '<td class="text-center">' . $i . '</td>';
                echo '<td class="text-center">' . strtoupper($row['prod_name']) . '</td>';
                echo '<td class="text-center">' . $row['quantity'] . '</td>';
				echo '<td class="text-center"> Php ' .money($row['item_price']) . '</td>';
                echo '<td class="text-center"> Php ' . money($row['total_cost']) . '</td>';
                $i++;
            }
}
?>      
 
      </tbody>
       <tbody></tbody>
    </table>
</div>	
	<?php
     error_reporting(0);
	 
 $sql = mysql_query("select sum(quantity*item_price)as total_price from products")
   or die('Error in query : $sql. ' .mysql_error());
    while ($row = mysql_fetch_array($sql)) {
   
   echo "<div id='first'><font size='5'> Total Price : Php " 
   .money($row[total_price])."</font> </div> ";
   }

   ?>
 <br><br>
<div class="alert alert-success">
<center> <h5>Created By: Mr. Jake R. Pomperada,MAED-IT
</h5></center> </div>
   </body>
</html>
