<?php include "func.php"; ?>

<!DOCTYPE html>
<html>
<body>
 
	<form action="" method="post">
	<table>
		<tr>
			<td>Enter The First Number :</td>
			<td><input type="number" name="num1"/></td>
		</tr>
		
		<tr>
			<td>Enter The Second Number :</td>
			<td><input type="number" name="num2"/></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="calculation" value="Calculate"/></td>
		</tr>
	</table>
	</form>
	
	<?php
	if(isset($_POST['calculation'])){
		$numOne= $_POST['num1'];
		$numTwo= $_POST['num2'];
		
			if(empty($numOne)or empty($numTwo)){
				echo "<span style='color:red'> Field must not Empty </span>";
			}else{
				$cal = new Calculation;
			$cal ->add($numOne, $numTwo);
			$cal ->sub($numOne, $numTwo);
			$cal ->mul($numOne, $numTwo);
			$cal ->div($numOne, $numTwo);
			}
			
			
	}
	
	?>
	


</body>
</html>