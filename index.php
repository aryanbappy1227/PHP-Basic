<!DOCTYPE html>
<html>
<body>


<?php
	   
	   //FUNCTION
	   //_________________
	   
	   /*function school($name="My", $year="1996"){
		   echo "$name School started in $year <br/>";
	   }
	   
	   school("Daffodil", "1994");
	   school();
	   school("Master Mind", "1975");
	   
	   function sum($x,$y){
		   $z=$x+$y;
		   return $z;
	   }
	   echo "6+4 = ".sum(6,4);*/
	   
	   //ARRAY
	   //_________________
	   
	  /* $x=array(2,4,1,8,5);
	   $length = count($x);
	   for($i=0; $i<$length; $i++){
		   echo "$x[$i] <br/>";
		   
	   }*/
	   
	   /*$cars = array(
					array("BMW",99,"Very Nice"),
					array("Audi",88,"Good"),
					array("Marcedis",94,"Better"),
					array("Honda",80,"Nice")
	   );
	   for($row = 0; $row<4; $row++){
		   echo "<p>Row Number $row</p>";
		   
		   echo"<ul>";
		   for($col=0; $col<3; $col++){
			   echo"<li>".$cars[$row][$col]."</li>";
		   }
		   echo"</ul>";
	   }
	   */
	   
	   //ARRAY Sorting
	   /*
	   $names = array("Bappy","Mahi","Saad","Joyonto","Aryan");
	   //$names = array(9,4,2,8,6);
	   rsort($names);
	   $length=count($names);
	   for($i=0; $i < $length; $i++){
		   echo $names[$i];
		   echo "<br/>";
	   }
   */
   
   
   //SUPERGLOBALS variable
   /*
   $x=5;
   $y=10;
   function sum(){
	   $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
	   
   }
   sum();
   echo $z;
   */
   
   // $_SERVER
  /*
  echo $_SERVER['PHP_SELF'];
   echo "<br/>";
   echo $_SERVER['SERVER_NAME'];
   echo "<br/>";
   echo $_SERVER['SERVER_ADDR'];
   */
   
   // $_REQUEST & $_POST
 
   
   /*if($_SERVER["REQUEST_METHOD"]=="POST"){
	   $name = $_REQUEST['username'];
	   if(empty($name)){
		   echo "<span style='color:red'>username cant be empty </span>";
		   
	   }else{
		   echo "<span style='color:green'>Log in successfully: ".$name."</span>";
	   }
   }
   */
   
   
   
   
?>










</body>
</html>