<?php
	include '../config.php';
	include '../models/connectDB.php';
	include '../models/student/StudentRepository.php';
	include '../models/student/Student.php';
	$action = isset($_GET["action"]) ? $_GET["action"] : 'list';
	switch ($action){
		case 'list':
			$studentRepository = new StudentRepository();
			$students = $studentRepository->getAll();
			include_once '../views/student/list.php';
			break;

		case 'add':
			include '../views/student/add.php';
			break;

		case 'save':
			$data = $_POST;
			$studentRepository = new StudentRepository();			
			if($studentRepository->save($data)){
				header('location:StudentController.php');
			}
			break;

		case 'edit':
			$id = $_GET["id"];
			$studentRepository = new StudentRepository();
			$student = $studentRepository->find($id);
			include '../views/student/edit.php';
			break;

		case 'update':
			$id = $_POST["id"];
 			$name = $_POST["name"];
 			$birthday = $_POST["birthday"];
 			$gender = $_POST["gender"];
 			$student = new Student($id, $name, $birthday, $gender);
			$studentRepository = new StudentRepository();
			if($studentRepository->update($student)){
				header('location:StudentController.php');
			}
			break;

		case 'delete':
			$id = $_GET["id"];
			$studentRepository = new StudentRepository();
			if($studentRepository->delete($id)){
				header('location:StudentController.php');
			};
			break;

		default:
			break;
	}
?>