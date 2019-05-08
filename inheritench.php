<?php
	
	class UserData{
		
		public $user;
		public $userId;
		
		public function __construct($user,$userId){
			$this->user=$user;
			$this->userId=$userId;
		}
		
		public function display(){
			echo "User name is $this->user and id is $this->userId";
		}
	}	
		
		class Admin extends UserData{
			public $level;
			
			public function display(){
				echo " user name is $this->user and id is $this->userId";
			}
		}
	
	
	$user="bappy";
	$id="28";
	$ur = new UserData($user,$id);
	echo "<br/>";
	$ur->display();
	echo "<br/>";
	$ad= new Admin($user, $id);
	$ad->level="Administrator";
	$ad->display();
	













?>