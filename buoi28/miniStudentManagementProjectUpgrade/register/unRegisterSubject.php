<?php
	include "../connectDB.php";

	$student_id = $_GET["student_id"];
    $sql = "SELECT id,name FROM subject WHERE id NOT IN
    		(SELECT subject_id FROM student_subject WHERE student_id=$student_id)";
    $result = $conn->query($sql);
    $subjects = [];
    if($result->num_rows > 0){
        $i = 0;
        while($row = $result->fetch_assoc()){
        	$subjects[] = $row;
        }
    }
    echo json_encode($subjects);
?>