<?php
	$id = $_GET["id"];

	include "../connectDB.php";
	$sql = "DELETE FROM student WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
	    header("location:listStudent.php");
	} else {
	    echo "Delete thất bại: " . $conn->error;
	}

	$conn->close();
?>