<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function __contruct($scientificName, $lastName, $gender, $weight, $bark, $meow){
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
		
		
	}

	function getName(){
	return "This is my " . $this->firstName . "and last ". $this->lastName;


	}

}
class Cat extends Animal{
	function greet(){
	return $this->meow;	
	}
}

class Dog extends Animal {
	function hello(){
		return $this->bark;
	}
}

$Cat = new Cat("Cat", "Mellow", "Yellow", "male", 15);
print "Animal 1 is a " . $Cat->getName();
?>

<?php
 class Product 
	{ 
	private $name; 
    private $price; 
	private $photo; 
	private $description; 
	public function Product() {} 
	
	protected function setName($name) { $this-?>name = $name; } 
	            public function GetName() { return $this->name; } 
	             
	            protected function setPrice($price = '0.00') { $this->price = $price; } 
	            public function GetPrice() { return $this->price; } 
	             
	            protected function setPhoto($photo) { $this->photo = $photo; } 
            public function GetPhoto() { return $this->photo; } 
	             
	            protected function setDescription($description) { $this->description = $description; } 
	            public function GetDescription() { return $this->description; } 
?>