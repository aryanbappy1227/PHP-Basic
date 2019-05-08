<?php

	abstract class Student{
		
		public $name;
		public $age;
		
		public function details(){
			echo "my name is " . $this->name . " and i am ". $this->age . " Years old <br>" ;
		}
		
		abstract public function school();
			
		
		
	}
	
	class Boy extends Student{
		
		public function describe(){
			
			return parent ::details(). " and i am a high school student <br>";
		}
		
		public function school(){
			return "i like to read a book";
		}
		
	}
	
	$s = new Boy();
	$s->name="bappy";
	$s->age="15";
	echo $s->describe();
	echo $s->school();