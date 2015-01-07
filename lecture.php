<?php
	class house{
		//class body
	}

	class roof{
		//class body
	}

	class door{
		//class body
	}

	$house1 = new house();
	$house2 = new house();

	$roof1 = new roof();
	$roof2 = new roof();

	$door1 = new door();
	$door2 = new door();


	class game{
		public $name = "Kingdom Hearts";
		public $genre = "JRPG, action, adventure";
		public $publisher = "Square Enix"; 
		public $platform = "Playstation 2";
	}

	class computer{
		public $OS = "OSX Yosemite";
		public $name = "Mac";
		public $company = "Apple Inc.";
	}

	class anime{
		public $name = "Attack On Titan";
		public $genre = "terror, action, adventure";
		public $year = "2013";
	}
	

	class Cat {
		public $name = "Max";
		public $gender = "male";
		public $price = 0;

		function getName() {
		return "{$this>name}";
		}
	}
	$cat1 = new Cat();
	$cat1->firstName = "Talon";
	print "The cat’s name is {$cat1>getName()}.";



?>