<?php 
	$tongdiem = ($_GET["toan"] + $_GET["ly"])*2 + $_GET["hoa"];
	if($tongdiem >= 24)
		echo "Đậu";
	else
		echo "Rớt";
?>