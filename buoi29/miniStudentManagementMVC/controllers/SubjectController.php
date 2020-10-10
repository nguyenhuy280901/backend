<?php
	include '../config.php';
	include '../models/connectDB.php';
	include '../models/subject/Subject.php';
	include '../models/subject/SubjectRepository.php';
	$action = isset($_GET["action"]) ? $_GET["action"] : 'list';
	switch ($action){
		case 'list':
			$subjectRepository = new SubjectRepository();
			$subjects = $subjectRepository->getAll();
			include_once '../views/subject/list.php';
			break;

		case 'add':
			include '../views/subject/add.php';
			break;

		case 'save':
			$data = $_POST;
			$subjectRepository = new SubjectRepository();			
			if($subjectRepository->save($data)){
				header('location:SubjectController.php');
			}
			break;

		case 'edit':
			$id = $_GET["id"];
			$subjectRepository = new SubjectRepository();
			$subject = $subjectRepository->find($id);
			include '../views/subject/edit.php';
			break;

		case 'update':
			$id = $_POST["id"];
 			$name = $_POST["name"];
 			$number_of_credit = $_POST["number_of_credit"];
 			$subject = new Subject($id, $name, $number_of_credit);
			$subjectRepository = new SubjectRepository();
			if($subjectRepository->update($subject)){
				header('location:SubjectController.php');
			}
			break;

		case 'delete':
			$id = $_GET["id"];
			$subjectRepository = new SubjectRepository();
			if($subjectRepository->delete($id)){
				header('location:SubjectController.php');
			};
			break;

		default:
			break;
	}
?>