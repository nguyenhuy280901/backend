<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$birthday = $_POST["birthday"];
	$gender = $_POST["gender"];

	include "../connectDB.php";
	$sql = "UPDATE student SET name='$name', birthday='$birthday', gender=$gender WHERE id = $id";

	if ($conn->query($sql) === TRUE) {
	    header("location:listStudent.php");
	} else {
	    echo "Update thất bại: " . $conn->error;
	}
	$conn->close();
?>