<?php
	include '../config.php';
	include '../models/connectDB.php';
	include '../models/student/StudentRepository.php';
	include '../models/student/Student.php';
	include '../models/subject/SubjectRepository.php';
	include '../models/subject/Subject.php';
	include '../models/register/RegisterRepository.php';
	include '../models/register/Register.php';
	$action = isset($_GET["action"]) ? $_GET["action"] : 'list';
	switch ($action){
		case 'list':
			$registerRepository = new RegisterRepository();
			$registers = $registerRepository->getAll();
			include_once '../views/register/list.php';
			break;

		case 'add':
			$studentRepository = new StudentRepository();
			$students = $studentRepository->getAll();

			$subjectRepository = new SubjectRepository();
			$subjects = $subjectRepository->getAll();
			include '../views/register/add.php';
			break;

		case 'save':
			$data = $_POST;
			$registerRepository = new RegisterRepository();			
			if($registerRepository->save($data)){
				header('location:RegisterController.php');
			}
			break;

		case 'edit':
			$student_id = $_GET["student_id"];
			$subject_id = $_GET["subject_id"];
			$student_name = $_GET["student_name"];
			$subject_name = $_GET["subject_name"];
			$score = $_GET["score"];
			include '../views/register/edit.php';
			break;

		case 'update':
 			$student_id = $_POST["student_id"];
			$subject_id = $_POST["subject_id"];
			$score = $_POST["score"];
 			$register = new Register($student_id, $subject_id, $score);
			$registerRepository = new RegisterRepository();
			if($registerRepository->update($register)){
				header('location:RegisterController.php');
			}
			break;

		case 'delete':
			$student_id = $_GET["student_id"];
			$subject_id = $_GET["subject_id"];
			$registerRepository = new RegisterRepository();
			if($registerRepository->delete($student_id, $subject_id)){
				header('location:RegisterController.php');
			};
			break;

		default:
			break;
	}
?>