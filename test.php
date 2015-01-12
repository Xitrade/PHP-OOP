<?php
	class fruits
	{
		public $stem;
		public $seeds;

			function __contruct($fruit, $seeds) 
			{
				$this->stem = $stem;
				$this->seeds = $seeds;
			}	

	function info()
	{
		return "this info is about fruits they have" . $this->stem . "and" . $this->seeds;
	}
   }

   $fruits = new Fruits('apple' , 'red');
   echo $friut->info();
?>