<?php
	$student_id = $_GET["student_id"];
	$subject_id = $_GET["subject_id"];

	include "../connectDB.php";
	$sql = "DELETE FROM student_subject WHERE student_id=$student_id AND subject_id=$subject_id";
	if ($conn->query($sql) === TRUE) {
	    header("location:listRegister.php");
	} else {
	    echo "Delete thất bại: " . $conn->error;
	}

	$conn->close();
?>