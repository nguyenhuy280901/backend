<?php
	// explode
	$a1 = 'Nguyen Van Nam';
	$a2 = explode(" ", $a1);
	var_dump($a2);

	// strlen
	$a3 = 'Nguyen Van Nam';
	$a4 = strlen($a3);
	echo "$a3 có $a4 ký tự";

	// str_word_count
	$a5 = 'Nguyen Van Nam';
	$a6 = str_word_count($a5);
	echo "<br>$a5 có $a6 từ";

	// str_replace
	$a7 = 'Nguyen Van Nam';
	$a8 = str_replace('Nam', 'Nu', $a7);
	echo "<br>$a8";

	// substr
	$a9 = 'Nguyen Van Nam';
	$a10 = substr($a9, 7, 3);
	echo "<br>$a10";

	// strstr
	$a11 = 'Nguyen Van Nam';
	$a12 = strstr($a11, 'Van');
	echo "<br>$a12";

	// strpos - string position
	$a13 = 'Nguyen Van Nam';
	$a14 = strpos($a13, 'Van');
	echo "<br>$a14";

	// strtolower
	$a15 = 'Nguyen Van Nam';
	$a16 = strtolower($a15);
	echo "<br>$a16";

	// strtoupper
	$a17 = 'Nguyen Van Nam';
	$a18 = strtoupper($a17);
	echo "<br>$a18";

	// ucfirst
	$a19 = 'nguyen van nam';
	$a20 = ucfirst($a19);
	echo "<br>$a20";

	// lcfirst
	$a21 = 'NGUYEN VAN NAM';
	$a22 = lcfirst($a21);
	echo "<br>$a22";

	// ucwords
	$a23 = 'nguyen van nam';
	$a24 = ucwords($a13);
	echo "<br>$a24";

	// trim
	$a25 = '  Nguyen Van Nam        ';
	$a26 = trim($a25);
	echo "<br>" . $a26 . ":" .  strlen($a25) . ":" . strlen($a26);

	// ltrim
	$a27 = '  Nguyen Van Nam        ';
	$a28 = ltrim($a27);
	echo "<br>" . $a28 . ":" .  strlen($a27) . ":" . strlen($a28);

	// rtrim
	$a29 = '  Nguyen Van Nam        ';
	$a30 = rtrim($a29);
	echo "<br>" . $a30 . ":" .  strlen($a29) . ":" . strlen($a30);

	// isset
	// $a31 = 'abc';
	if(isset($a31))
		echo '<br>Biến $a31 có tồn tại';
	else
		echo '<br>Biến $a31 không tồn tại';

	// empty
	$a32 = array(0, 1);
	if(empty($a32[2]))
		echo '<br>Biến $a32[2] empty';
	else
		echo '<br>Biến $a32[2] không empty';
	$a33 = 0;
	if(empty($a33))
		echo '<br>Biến $a33 empty';
	else
		echo '<br>Biến $a33 không empty';

	// is_array
	$a34 = [];
	if(is_array($a34))
		echo '<br>Biến $a34 là array';
	else
		echo '<br>Biến $a34 không là array';

	// is_null
	$a35 = null;
	if(is_null($a35))
		echo '<br>Biến $a35 là null';
	else
		echo '<br>Biến $a35 không là null';

	// Toán tử 3 ngôi
	$b = 0;
	$c = $b == 0 ? 1 : 2;
	echo "<br>$c";
?>