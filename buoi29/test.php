<?php 
class A {
	var $x;
	protected $y;
	private $z;

	function __construct($a, $b, $c) {
		$this->x = $a;
		$this->y = $b;
		$this->z = $c;
	}

	// function getZ() {
	// 	return $this->z;
	// }
}

class B extends A {
	var $w;
	function __construct($a, $b, $c, $d) {
		parent::__construct($a, $b, $c);
		$this->w = $d;
	}
	function getX() {
		return $this->x;
	}

	function getY() {
		return $this->y;
	}

	function getZ() {
		// return parent::getZ();
		return $this->z;
	}

	function getW() {
		return $this->w;
	}
}

$sv = new B(5, 6, 7, 8);
var_dump($sv);
echo $sv->getX();
echo "<br>";
echo $sv->getY();
echo "<br>";
echo $sv->getZ();
echo "<br>";
echo $sv->getW();
echo "<br>";
?>