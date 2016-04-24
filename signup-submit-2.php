<!--Alyssa Colasurdo HW 6-->
<!DOCTYPE html>
<html>
	<head>
		<title>GeekLuv Sign Up</title>
			<?php
			include 'common.php';
		
			headerset();
			?>
		
		</head>

	<body>
		<?//get all information from the signup form
		$name= $_POST["name"];
		$gender= $_POST["gender"];
		$age= $_POST["age"];
		$personality= $_POST["personality"];
		$operating= $_POST["operating"];
		$minAge= $_POST["minAge"];
		$maxAge= $_POST["maxAge"];
		$seekmale= $_POST["seekmale"];
		$seekfemale= $_POST["seekfemale"];
		
		$nameErr="";
		//check for validity
		//check name
		if(empty($name)){
			$nameErr="Name is required";
			//exit;
		}
		
		
		

		//save all information in one string
		$text= $name.",".$gender.",".$age.",".$personality.",".$operating.",".$minAge.",".$maxAge.",".$seekmale.$seekfemale;

		//add string of new person to the singles2.txt file
		$file= 'singles2.txt';
		$current= file_get_contents($file);
		$current .= $text."\n";
		file_put_contents($file, $current);
		?>
		

		<div id="bannerarea">
			<? banner();?>
		</div>

		
		<div>
			<p><strong>Thank you!</strong></p> 
		
			<p>Welcome to NerdLuv, <?=$name?>!</p>
		
			<p>Now <a href="matches.php">log in to see your matches!</a></p>

		</div>
		
		
		<div>	
		<? footerset();?>
		</div>
	</body>
</html>