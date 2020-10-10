<?php 
	$name = $_POST["name"];
	$number_of_credit = $_POST["number_of_credit"];

	include "../connectDB.php";
	$sql = "INSERT INTO subject (name, number_of_credit)
	VALUES ('$name', $number_of_credit)";

	if ($conn->query($sql) === TRUE) {
	    header("location:listSubject.php");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>