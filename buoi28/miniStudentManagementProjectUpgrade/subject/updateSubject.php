<?php
	$id = $_POST["id"];
	$name = $_POST["name"];
	$number_of_credit = $_POST["number_of_credit"];

	include "../connectDB.php";
	$sql = "UPDATE subject SET name='$name', number_of_credit='$number_of_credit' WHERE id = $id";

	if ($conn->query($sql) === TRUE) {
	    header("location:listSubject.php");
	} else {
	    echo "Update thất bại: " . $conn->error;
	}
	$conn->close();
?>