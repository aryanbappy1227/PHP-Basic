<?php

	class Person{
		
		public $name;
		public $age;
		
		public function __construct($input1,$input2){
			$this->name= $input1;
			$this->age = $input2;
		}
		public function personDetails(){
			echo "This person name is {$this->name} and Age is {$this->age}";    
		}
		
		
	}
$personOne = new person("Bappy", "26");
$personOne ->personDetails();







?>