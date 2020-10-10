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
	// $page = $_GET["page"];
	// $start = ($page - 1 ) * 3;
	// $sql = "SELECT * FROM student WHERE firstname LIKE '%Loc%'";
	// $sql = "SELECT employee.*, department.name AS dept_name FROM employee JOIN department ON employee.dept_id = department.dept_id";
	$sql = "SELECT * FROM student WHERE lastname LIKE '%huy%'";

	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	    // output data of each row
	    while($row = $result->fetch_assoc()){
	       var_dump($row);
	    }
	} else {
	    echo "0 results";
	}

	$conn->close();
 ?>