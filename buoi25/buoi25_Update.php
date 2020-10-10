<?php 
	// Create connection
	$servername = "localhost";
	$username= "root";
	$password = "";
	$dbname = "study";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Kết nối thất bại: " . $conn->connect_error);
	}
	mysqli_set_charset($conn,"utf8");
	echo "Kết nối thành công";

	// Lệnh update
	$sql = "UPDATE student SET email='abc@gmail.com', firstname='Locx' WHERE id = 1";
	// Thực hiện update
	if ($conn->query($sql) === TRUE) {
	    echo "update thành công";
	} else {
	    echo "Update thất bại: " . $conn->error;
	}
	$conn->close();
 ?>