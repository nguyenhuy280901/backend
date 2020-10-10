<?php 
	$name = $_POST["name"];
	$birthday = $_POST["birthday"];
	$gender = $_POST["gender"];

	include "../connectDB.php";
	$sql = "INSERT INTO student (name, birthday, gender)
	VALUES ('$name', '$birthday', $gender)";

	if ($conn->query($sql) === TRUE) {
	    header("location:listStudent.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>