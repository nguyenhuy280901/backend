<?php 
	class Register {
	 	protected $student_id;
	 	protected $subject_id;
	 	protected $score;

		function __construct($student_id, $subject_id, $score){
			$this->student_id = $student_id;
			$this->subject_id = $subject_id;
			$this->score = $score;
		}

		function getStudentId(){
			return $this->student_id;
		}

		function getSubjectId(){
			return $this->subject_id;
		}

		function getScore(){
			return $this->score;
		}

		function getStudent() {
			$studentRepository = new StudentRepository();
			$student = $studentRepository->find($this->student_id);
			return $student;
		}

		function getSubject() {
			$subjectRepository = new SubjectRepository();
			$subject = $subjectRepository->find($this->subject_id);
			return $subject;
		}
	}
?>