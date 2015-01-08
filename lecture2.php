<?php
	class person {
	public $firstName;
	public $lastName;
	public $gender;
	
		function __construct($title, $firstName, $lastName, $gender) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		
		}
		function getName() {
		return "{$this->firstName}" . "{$this->lastName}";
		}
	}

	$person1 = new person("Ulises", "Gomez-Jaramillo", "Male");
	print "person1: {$person->getName()}"\n;

?>