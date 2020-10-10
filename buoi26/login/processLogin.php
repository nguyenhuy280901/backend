<?php
	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	require 'connectDB.php';

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);
	if($result->num_rows == 1){
		session_start();
		$_SESSION["username"] = $username;
		header("location:profile.php");
	}
	else {
		header("location:login.php");
	}
?>