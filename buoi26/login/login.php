<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<?php
	if(isset($_COOKIE["username"])){
		session_start();
		$_SESSION["username"] = $_COOKIE["username"];
		header("location:profile.php");
	}
?>
<body>
	<form action="processLogin.php" method="POST">
		<input type="text" placeholder="username" name="username"><br>
		<input type="password" placeholder="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>