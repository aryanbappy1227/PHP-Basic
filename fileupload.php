<!DOCTYPE HTML>  
<html>
<head>
<style>
.phpcoding{width:400px; margin: 0 auto; background:#ddd; padding:20px; min-height:300px;}
</style>

</head>
<body> 
<section class="phpcoding">
<hr>
	PHP File Upload
	<span style ="float:right">
		<?php
		   date_default_timezone_set('Asia/Dhaka');
		   echo "Time: ".date("h:i:s a");
		?>
	</span>
</hr><br/><br/>

	<?php
		if(isset($_FILES['image'])){
			$filename = $_FILES['image']['name'];
			$filetmp  = $_FILES['image']['tmp_name'];
			move_uploaded_file($filetmp,'images/'.$filename);
			echo "Image Successfully Uploaded";
		}
	
	?>
	
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image"/>
		<input type="submit" value="Submit"/>
	</form>

</section>
</<body> 
</html>