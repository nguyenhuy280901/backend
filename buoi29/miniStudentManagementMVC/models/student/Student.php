<?php 
	class Student {
	 	protected $id;
	 	protected $name;
	 	protected $gender;
	 	protected $birthday;

		function __construct($id, $name, $birthday, $gender){
			$this->id = $id;
			$this->name = $name;
			$this->birthday = $birthday;
			$this->gender = $gender;
		}

		function getId(){
			return $this->id;
		}

		function getName(){
			return $this->name;
		}

		function getBirthday(){
			return $this->birthday;
		}

		function getGender(){
			return $this->gender;
		}

		function getGenderName() {
			$genderName = array (
				0 => "Nam",
				1 => "Nữ",
				2 => "Khác"
			);
			return $genderName[$this->gender];
		}
	}
?>