<?php 
	// Count(Đếm)
	// Array 1 chiều
	$a1 = array(4, 5, 7, 9, 12);
	$size = count($a1);
	echo 'Kích thước của mảng a1 là: ' . $size;

	// Array 2 chiều
	$a2 = array(
	"nga" => array("toan" => 7, "ly" => 4, "hoa" => 8.5),
	"nam" => array("toan" => 4, "ly" => 2, "hoa" => 3.5),
	"nhan" => array("toan" => 7, "ly" => 5, "hoa" => 9.5),
	);
	$size = count($a2);
	echo '<br> Kích thước của mảng a2 là: ' . $size;

	// Thêm 1 phần tử vào cuối mảng
	// Cách 1
	$a3 = [1, 2, 3];
	array_push($a3, 4);
	echo '$a3: ';
	var_dump($a3);

	// Cách 2:
	$a4 = [1, 2, 3];
	$a4[] = 4;
	echo '$a4: ';
	var_dump($a4);

	// Lấy 1 phần tử cuối ra khỏi Array
	$a5 = [1, 2, 3, 4];
	$e = array_pop($a5);
	echo 'Phần tử cuối của a5 là: ' . $e;

	// Thêm 1 phần tử vào đầu mảng
	$a6 = [2, 3, 4];
	array_unshift($a6, 1);
	echo '$a6: ';
	var_dump($a6);

	// Lấy 1 phần tử ở đầu mảng
	$a7 = [1, 2, 3, 4];
	$e = array_shift($a7);
	echo 'Phần tử đầu tiên của a7 là: ' . $e;
	echo '<br>$a7: ';
	var_dump($a7);

	// Chèn, xóa, thay thế bất kỳ vị trí nào trong mảng
	$a8 = [7, 4, 6, 2, 5];
	$x = array_splice($a8, 2, 2, [1, 2, 3]);
	echo '$x: ';
	var_dump($x);
	echo '$a8: ';
	var_dump($a8);

	// BT1
	$a9 = ['a', 'b', 'c', 'd', 'e', 'f'];
	array_splice($a9, 3, 1);
	echo '$a9: ';
	var_dump($a9);

	// BT2
	$a10 = ['a', 'b', 'c', 'd', 'e', 'f'];
	array_splice($a10, 5, 0, 'm');
	echo '$a10: ';
	var_dump($a10);

	// BT3
	$a11 = ['a', 'b', 'c', 'd', 'e', 'f'];
	array_splice($a11, 2, 2, ['m', 'n', 'q']);
	echo '$a11: ';
	var_dump($a11);

	$a12 = array("a","b","c","d","e","f");
	$e = "b";

	if(in_array($e, $a12))
		echo "Chữ $e có nằm trong a12";	
	else
		echo "Chữ $e không nằm trong a12";

	$a13 = ["toan" => 7, "ly" => 8, "hoa" => 9];
	$key = "toan";
	echo '<br>';
	if(array_key_exists($key, $a13))
		echo "a13 có chứa key $key";	
	else
		echo "a13 không chứa key $key";

	$a14 = array("a","b","c","d","b");
	$duplicate_array = array_count_values($a14);
	var_dump($duplicate_array);

	$a15 = [1, 2, 3, 4, 5, 6];
	echo 'Tổng: ' . array_sum($a15);
	echo '<br>Tích: ' . array_product($a15);

	$a16 = [7, 4, 6];
	$a17 = [2, 5];
	$a18 = array_merge($a16, $a17);
	echo '<br>$a18: ';
	var_dump($a18);

	$a19 = [1, 2, 3];
	if(is_array($a19))
		echo "<br>a19 là array";
	else
		echo "<br>a19 không phải là array";

	$a20 = ["a", "b", "c", "d", "b", "b"];
	$a21 = array_unique($a20);
	echo '<br>$a21: ';
	var_dump($a21);

	$a22 = array("toan" => 7, "ly" => 4, "hoa" => 8.5);
	$a23 = array_values($a22);
	$a24 = array_keys($a22);
	var_dump($a23);
	var_dump($a24);

	// Reverse
	$a25 = ["a", "b", "c", "d", "e", "f"];
	$a26 = array_reverse($a25);
	var_dump($a26);

	// Search
	$a27 = array("toan" => 7, "ly" => 4, "hoa" => 8.5);
	$key = array_search(7, $a27);
	echo $key;

	// Sort
	// Array thường
	$a28 = [2, 4, 1, 5, 3];
	// Tăng dần
	sort($a28);
	var_dump($a28);
	// Giảm dần
	rsort($a28);
	var_dump($a28);

	// Array kết hợp
	// Asociate: Kết hợp
	$a29 = array("toan" => 7, "ly" => 4, "hoa" => 8);
	// Tăng dần theo value
	asort($a29);
	var_dump($a29);
	// Tăng dần theo key
	ksort($a29);
	var_dump($a29);
	// Giảm dần theo value
	arsort($a29);
	var_dump($a29);
	// Giảm dần theo key
	krsort($a29);
	var_dump($a29);

	// Nối các phần tử trong array thành chuỗi
	$a30 = ["Nguyen", "Van", "A"];
	$fullname = implode(" ", $a30);
	echo $fullname;
?>