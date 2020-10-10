<?php  
	$a = 1;
	echo $a;
	define('PI', 3.14);
	echo '<br/>';
	echo PI;
	echo '<br/>';
	$b = "Hello $a";
	echo $b;

	echo '<br/>';
	$c = 'Hello $a';
	echo $c;

	echo '<br/>';
	$d = "a\"";
	echo $d;

	echo '<br/>';
	$e = 'a"';
	echo $e;

	echo '<br/>';
	$f = 'a\'';
	echo $f;

	echo '<br/>';
	$g = "a'";
	echo $g;

	$a = [3, 5, 7, 9];
	// $a = array(3, 5, 7, 9);
	var_dump($a);
	print_r($a);
	echo '<br/>';
	echo count($a);

	echo "<br>";
	echo $a[1];
	$a[1] = 6;
	var_dump($a);

	$a = [3, 5, 7, 9];
	$sum = 0;
	for ($i = 0; $i < count($a); $i++) {
		$sum += $a[$i];
	}
	echo $sum;
?>
