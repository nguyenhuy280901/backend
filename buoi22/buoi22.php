<?php
  	// Array thường
	$a = [3, 5, 10, 7];
	var_dump($a);

	$b = [0 => 3, 1 => 5, 2 => 10, 3 => 7];
	var_dump($b);
	// Một phần tử trong mảng gồm 2 phần: chỉ số và giá trị
	// Chỉ số nằm trước dấu =>
	// Giá trị nằm sau dấu =>

	// key, index, chỉ số, khóa, chỉ mục: cùng nghĩa

	// Array kết hợp thì chỉ số nó là chuỗi, vd:
	$c = ["toan" => 7, "ly" => 5, "hoa" => 9];
	echo $c["ly"];

	$c["ly"] = 6;
	var_dump($c);

	$sum = 0;
	foreach ($c as $value) {
		$sum += $value;
	}
	echo $sum;

	// Mảng đa chiều là mảng mà chứa phần tử là mảng
	$d = [[2, 3, 9], ['a', 100, true]];
	echo '<br/>';
	echo $d[1][0];
	var_dump($d);

	for ($i = 0; $i < count($d); $i++) {
		$el = $d[$i];
		for ($j = 0; $j < count($el); $j++) {
			echo $el[$j] . '<br>';
		}
	}

	$sum = 0;
	$e = [[2, 9, 3], [5, 4, 1, 10]];
	for ($i = 0; $i < count($e); $i++) {
		$el = $e[$i];
		for ($j = 0; $j < count($el); $j++) {
			$sum += $el[$j];
		}
	}
	echo $sum;

	function Tong($a, $b){
		global $connect;
		return $a + $b + $connect;
	}

	$connect = 10;
	echo '<br/>';
	echo Tong(10, 20);
?>