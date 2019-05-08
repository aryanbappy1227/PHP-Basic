<?php
	class person{
		public $name ;
		public $age;
		
		public function personName(){
			echo "person name is :".$this->name."<br/>";
		}
		public function personAge($value){
			echo "person Age is:".$this->age="$value";
		}
		
	}
	
	$personOne = new person;
	$personOne->name="aryan";
	$personOne->personName();
	
	$personOne->personAge("24");
	
	
	