<?php
	session_id() || session_start();
	if (empty($_SESSION["username"])) {
		header("location:login.php");
		exit();
	}
	$username = $_SESSION["username"];
	require 'connectDB.php';

	$sql = "SELECT * FROM user WHERE username='$username'";
	$relsult = $conn->query($sql);
	$row = $relsult->fetch_assoc();
	$str = "Hello, " . $row['firstname'] . ' ' . $row['lastname'];
	echo ucwords($str);
?>
<br>
<a href="logout.php">Logout</a>