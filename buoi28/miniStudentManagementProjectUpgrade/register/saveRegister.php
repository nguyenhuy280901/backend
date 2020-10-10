<?php 
	$student_id = $_POST["student_id"];
	$subject_id = $_POST["subject_id"];

	include "../connectDB.php";
	$sql = "INSERT INTO student_subject (student_id, subject_id)
	VALUES ($student_id, $subject_id)";

	if ($conn->query($sql) === TRUE) {
	    header("location:listRegister.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>