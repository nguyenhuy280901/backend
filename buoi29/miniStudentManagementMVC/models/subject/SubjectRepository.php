<?php
	class SubjectRepository{
	    protected function fetchAll($condition = null){
	 		global $conn;
			$subjects = [];
			$sql = "SELECT * FROM subject";
			if($condition){
				$sql .= " $condition";
			}
			$result = $conn->query($sql);
			if($result->num_rows > 0 ) { 
				while ($row = $result->fetch_assoc()) { 
					$subject = new Subject($row["id"], $row["name"], $row["number_of_credit"]);
					$subjects[] = $subject;
				}
			}
			return $subjects;
	 	}

	 	function getAll(){
 			return $this->fetchAll();
 		}

 		function save($data){
 			global $conn;
 			$name = $data["name"];
 			$number_of_credit = $data["number_of_credit"];

 			$sql = "INSERT INTO subject (name, number_of_credit) VALUES ('$name', $number_of_credit)";
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

 		function update(Subject $subject){
 			global $conn;
 			$id = $subject->getId();
 			$name = $subject->getName();
 			$number_of_credit = $subject->getNumberOfCredit();
 			$sql = "UPDATE subject SET name='$name', number_of_credit=$number_of_credit WHERE id = $id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}

 		function delete($id){
 			global $conn;
 			$sql = "DELETE FROM subject WHERE id=$id";
 			if($conn->query($sql)){
 				return true;
 			}
 			echo "Error: " . $sql . "<br>" . $conn->error;
			return false;
 		}
 	}
?>