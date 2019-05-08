<?php
$errname = $erremail = $errpassword = $errcomment = $errgender = "";
?>


<!DOCTYPE HTML>  
<html>
<head>
<style>
.phpcoding{width:400px; margin: 0 auto; background:#ddd; padding:20px; min-height:300px;}
</style>

</head>
<body> 
<section class="phpcoding">
<?php
// define variables and set to empty values
$name = $email = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if(empty($_POST["name"])){
		$errname = "<p style='color:red'>Name Must Fulfiled</p>";
	}else{
		$name = test_input($_POST["name"]);
	}
	
	if(empty($_POST["email"])){
		$erremail = "<p style='color:red'>E-mail Must Fulfiled</p>";
	}elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
		$erremail ="<p style='color:red'>Invalid E-mail Formate</p>";
	}else{
		$email = test_input($_POST["email"]);
	}
	
  if(empty($_POST["password"])){
		$errpassword = "<p style='color:red'>Password Must Fulfiled</p>";
	}else{
		$password = test_input($_POST["password"]);
	}
  
  
  
  $comment = test_input($_POST["comment"]);
  
   if(empty($_POST["gender"])){
		$errgender = "<p style='color:red'>Gender Must Fulfiled</p>";
	}else{
		$gender = test_input($_POST["gender"]);
	}
  
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Creative Tech World</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table>
			<p style="color:red">* Filed Must Required</p>
			<tr>
				<td>Name :</td>
				<td><input type="text" name="name"/></td>
				<td>*<?php echo $errname;?></td>
			</tr>
			
			<tr>
				<td>Email :</td>
				<td><input type="text" name="email"/></td>
				<td>*<?php echo $erremail;?></td>
			</tr>
			
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"/></td>
				<td>*<?php echo $errpassword;?></td>
			</tr>
			</tr>
			
			<tr>
				<td>Comment :</td>
				<td><textarea name="comment" rows="5" cols="30"></textarea></td>
			</tr>
			
			<tr>
				<td>Gender</td>
				<td>
				Male<input type="radio" name="gender" value="Male"/>
				Female<input type="radio" name="gender" value="Female"/>
				
				</td>
				<td>*<?php echo $errgender;?></td>
			</tr>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"/></td>
			</tr>
		</table>
	</form>
	
<?php
	echo "<h2>Your Input:</h2>";
	echo $name;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $password;
	echo "<br>";
	echo $comment;
	echo "<br>";
	echo $gender;
?>
  
</section>
</<body> 
</html>



