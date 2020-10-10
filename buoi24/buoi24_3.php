<?php
	$filename = "demo.txt";
	echo "Đọc từng ký tự trong file:<br>";
	$fp = fopen($filename, "r");//read
	//feof: file end of file
	while (!feof($fp)) { //file end of file
		$c = fgetc($fp); //fgetc - file get character
		if ($c == "\n") {
			$c = "<br>";
		}
		echo $c;
	}
	// echo $fp;
	fclose($fp);

	echo "<br>Đọc từng dòng trong file:<br>";
	$fp = fopen($filename, "r");
	while(!feof($fp)){
		$line = fgets($fp);
		$line = str_replace("\n", "<br>", $line);
		echo $line;
	}
	fclose($fp);

	echo "<br>Đọc file 1 lần:<br>";
	$content = file_get_contents($filename);
	$content = str_replace("\n", "<br>", $content);
	echo $content;


	// r: read
	// a: append
	// w: write
	$fp = fopen($filename, "a");
	fwrite($fp, "\nNguyen Thi Dung");
	fclose($fp);

	$content = "\nabc...xyz";
	file_put_contents($filename, $content, FILE_APPEND);
?>