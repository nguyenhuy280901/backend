<?php
	$id = $_GET["id"];

	include "../connectDB.php";
	$sql = "DELETE FROM subject WHERE id=$id";
	if ($conn->query($sql) === TRUE) {
	    header("location:listSubject.php");
	} else {
	    echo "Delete thất bại: " . $conn->error;
	}

	$conn->close();
?>