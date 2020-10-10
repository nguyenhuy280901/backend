<?php
	class Student{
	    var $id;
	    var $name;
	    var $birthday;
	    protected $gender;

	    function __construct($id, $name, $birthday, $gender){
	    	$this->id = $id;
	    	$this->name = $name;
	    	$this->birthday = $birthday;
	    	$this->gender = $gender;
	    }

	    function getAge(){
	    	$currentYear = date("Y");
	    	$number = strtotime($this->birthday);
	    	$bornYear = date("Y", $number);
	    	$age = $currentYear - $bornYear;
	    	return $age;
	    }

	    function setGender($gender){
	    	$gender_arr = ["Nam", "Nu", "Kxd"];
	    	if(in_array($gender, $gender_arr)){
	    		$this->gender = $gender;
	    	}
	    }
	}

	$sv1 = new Student(123, 'Nguyen Van A', '1995-01-01', 'Nam');
	$sv1->setGender('Kxd');
	var_dump($sv1);
	echo $sv1->getAge();

	// Phạm vi truy xuất
	// Protected: Truy xuất được bên trong Class, còn bên ngoài thì không truy xuất được
	// Public(default): Truy xuất được bên trong và ngoài Class
	// Private: Chỉ truy xuất được trong Class nội tại, Class kế thừa không truy xuất được
?>