<?php 
	// 1 
	$sum = 0;
	for ($i = 3; $i < 16; $i++){
		$sum += $i;
	};
	echo $sum . '<br>';

	// 2
	$a = [3,5,4,9,17,20];
	$sum = 0;
	for ($i = 0; $i < count($a); $i++){
		$sum += $a[$i];
	};
	echo $sum . '<br>';

	// 3
	$sum = 0;
	for ($i = 0; $i < count($a); $i++){
		if($a[$i] % 2 == 0){
			$sum += $a[$i];
		}		
	};
	echo $sum . '<br>';

	// 4
	function isTongChan($a, $b){
		$c = $a + $b;
		if($c % 2 == 0) return true;
		return false;
	}
	$d = isTongChan(3,4);
	if($d) echo 'Số chẵn';
	else echo 'Số lẻ';
	echo '<br>';

	// 5
	function isPased($diem){
		$sum = 0;
		$sum = ($diem["toan"] + $diem["ly"]) * 2 + $diem["hoa"];
		if($sum > 24) return true;
		return false;
	}
	$diem = ["toan" => 7, "ly" => 4, "hoa" => 8.5];
	$rel = isPased($diem);
	if($rel) echo 'Đậu';
	else echo 'Rớt';
	echo '<br>';

	// 6
	$danh_sach_diem_sv = 	[	
								"nga" => ["toan" => 7, "ly" => 4, "hoa" => 8.5],
								"nam" => ["toan" => 4, "ly" => 9, "hoa" => 3.5],
								"nhan" => ["toan" => 7, "ly" => 5, "hoa" => 9.5],								
							];

	function passedList($ds){
		$passList = [];
		foreach ($ds as $tensv => $diem) {
			if(isPased($diem)) $passList[] = $tensv;
		}
		return $passList;
	}

	$result = passedList($danh_sach_diem_sv);
	foreach ($result as $tensv) {
		echo $tensv . '<br>';
	}
?>