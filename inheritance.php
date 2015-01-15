<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $lastName, $gender, $weight, $bark, $meow){
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		
	}


	function getName(){
	return "This is my " . $this->firstName . "and last ". $this->lastName;


	}

}
class Cat extends Animal{
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $meow){
			parent::__construct($scientificName, $firstName, $lastName, $gender, $weight, $meow);
			$this->meow = $meow;
	}
	function greet(){
	return $this->meow;	
	}
}

class Dog extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight, $bark){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight, $bark);
		$this->bark = $bark;
	}
	function hello(){
	return $this->bark;
	}
}

$cat = new Cat("Cat", "Mellow", "Yellow", "male", 15);
print "Animal 1 is a " . $Cat->getName();

//Example 2

class house {
	public $style;
	public $floors;
	public $bath;
	public $price;
	public $flooring;

	function __construct($style, $floors, $bath, $price, $flooring){
		$this->Victorian = $style;
		$this->twoFloors = $floors;
		$this->threeBath = $bath;
		$this->seventyThousand = $price;
		$this->carpet = $flooring;
		
	}


	function ad(){
	return "This is my " . $this->style . "home. Its has ". $this->floors;


	}

}
class SpanishColonial extends house{
	function __construct($style, $floors, $bath, $price, $flooring, $vendor){
			parent::__construct($style, $floors, $bath, $price, $flooring, $vendor);
			$this->arkham = $vendor;
	}
	function ad1(){
	return $this->arkham;	
	}
}

$house = new ad1("twoFloors", "threeBath", "Yellow", "twentyThousand", 15);
print "This home is a " . $SpanishColonial->house();

//Example 3

class car {
	public $make;
	public $model;
	public $modelYear;
	public $type;

	function __construct($make, $model, $modelYear, $type){
		$this->Hyundai = $make;
		$this->Genesis = $model;
		$this->twentyFifteen = $modelYear;
		$this->everyday = $type;
		
	}


	function Car(){
	return "This " . $this->make . ". It is a ". $this->model;


	}

}
class Hyundai extends Car{
	function __construct($make, $model, $modelYear, $type){
			parent::__construct($make, $model, $modelYear, $type);
			$this->Hyundai = $make;
	}
	function car(){
	return $this->Hyundai;	
	}
}

$car = new car("Car", "Vroom", "Chrome", "stock", 15);
print "We have a " . $car->Genesis();