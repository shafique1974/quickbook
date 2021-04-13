<?php
	echo "See the list money format below.<br/>";
	$money = "14265465456005.29";
	$money_2 = "1212";

	function formatMoney($number, $fractional=false) {
		if ($fractional) {
			$number = sprintf('%.2f', $number);
		}
		while (true) {
			$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
			if ($replaced != $number) {
				$number = $replaced;
			} else {
				break;
			}
		}
		return "$".$number;
	}
	
echo "<br>";
echo formatMoney($money);
echo "<br>";
echo formatMoney($money_2);
?>
