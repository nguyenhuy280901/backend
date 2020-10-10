<?php
	session_start();
	var_dump($_SESSION);
	$_SESSION["username"] = "nguyenvana";
	var_dump($_SESSION);
	
?>