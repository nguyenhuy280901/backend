<?php 
	$sum = 0;
	for ($i = 1; $i < 10; $i++) {
		$sum += $i;
	}
	echo $sum;

	function FullName($ho, $chudem, $ten){
		return '<br/>' . $ho . ' ' . $chudem . ' ' . $ten;
	}
	echo FullName('nguyen', 'van', 'a');

	$a = [3, 5, 10, 2, 7, 9, 3];
	$sum = 0;
	for ($i = 0; $i < count($a); $i++) {
		if($a[$i] % 2 != 0){
			$sum += $a[$i];
		}
	}
	echo '<br/>' . $sum;
?>
