<?php
	function TangGiaTri(&$a, $increment){
		$a += $increment;
	}

	$x = 3;
	$y = 7;
	TangGiaTri($x, $y);
	echo "$x<br>";
	TangGiaTri($x, $y);
	echo "$x<br>";
?>