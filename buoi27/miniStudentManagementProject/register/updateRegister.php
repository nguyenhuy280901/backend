<?php
	$student_id = $_POST["student_id"];
	$subject_id = $_POST["subject_id"];
	$score = $_POST["score"];

	include "../connectDB.php";
	$sql = "UPDATE student_subject SET score=$score WHERE student_id=$student_id AND subject_id=$subject_id";

	if ($conn->query($sql) === TRUE) {
	    header("location:listRegister.php");
	} else {
	    echo "Update thất bại: " . $conn->error;
	}
	$conn->close();
?>