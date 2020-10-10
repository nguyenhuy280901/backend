<?php
	require 'connectDB.php';
	$username = $_POST["username"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	$birthday = $_POST["birthday"];
	$gender = $_POST["gender"];


	$sql = "INSERT INTO user (username ,firstname, lastname, email, password, birthday, gender)
	VALUES ('$username', '$firstname', '$lastname', '$email', '$password', 'birthday', $gender)";

	if ($conn->query($sql)) {
		header("location:../login/login.html");
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>