<?php
	class StudentRepository{
	    protected function fetchAll($condition = null){
	 		global $conn;
			$students = [];
			$sql = "SELECT * FROM student";
			if($condition){
				$sql .= " $condition";
			}
			$result = $conn->query($sql);
			if($result->num_rows > 0 ){
				while ($row = $result->fetch_assoc()) { 
					$student = new Student($row["id"], $row["name"], $row["birthday"], $row["gender"]);
					$students[] = $student;
				}
			}
			return $students;
	 	}

	 	function getAll(){
 			return $this->fetchAll();
 		}

 		function save($data){
 			global $conn;
 			$name = $data["name"];
 			$birthday = $data["birthday"];
 			$gender = $data["gender"];
 			$sql = "INSERT INTO student (name, birthday, gender) VALUES ('$name', '$birthday', $gender)";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}

 		function find($id){
 			$condition = "WHERE id=$id";
 			return current($this->fetchAll($condition));
 		}

 		function update(Student $student){
 			global $conn;
 			$id = $student->getId();
 			$name = $student->getName();
 			$birthday = $student->getBirthday();
 			$gender = $student->getGender();
 			$sql = "UPDATE student SET name='$name', birthday='$birthday', gender=$gender WHERE id = $id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}

 		function delete($id){
 			global $conn;
 			$sql = "DELETE FROM student WHERE id=$id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}
	}
?>