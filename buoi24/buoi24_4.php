<?php
	var_dump($_POST);
	var_dump($_FILES);
	$filename = $_FILES["avatar"]["name"];
	$destination = "images/" . $filename;
	move_uploaded_file($_FILES["avatar"]["tmp_name"], $destination);
?>