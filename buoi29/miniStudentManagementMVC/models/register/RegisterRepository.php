<?php
	class RegisterRepository{
	    protected function fetchAll($condition = null){
	 		global $conn;
			$registers = [];
			$sql = "SELECT * FROM student_subject";
			if($condition){
				$sql .= " $condition";
			}
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) { 
				while($row = $result->fetch_assoc()) { 
					$register = new Register($row["student_id"], $row["subject_id"], $row["score"]);
					$registers[] = $register;
				}
			}
			return $registers;
	 	}

	 	function getAll(){
 			return $this->fetchAll();
 		}

 		function save($data){
 			global $conn;
 			$student_id = $data["student_id"];
 			$subject_id = $data["subject_id"];
 			$sql = "INSERT INTO student_subject (student_id, subject_id) VALUES ($student_id, $subject_id)";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}

 		function update(Register $register){
 			global $conn;
 			$student_id = $register->getStudentId();
 			$subject_id = $register->getSubjectId();
 			$score = $register->getScore();
 			$sql = "UPDATE student_subject SET score=$score WHERE student_id=$student_id AND subject_id=$subject_id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}

 		function delete($student_id, $subject_id){
 			global $conn;
 			$sql = "DELETE FROM student_subject WHERE student_id=$student_id AND subject_id=$subject_id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}
	}
?>