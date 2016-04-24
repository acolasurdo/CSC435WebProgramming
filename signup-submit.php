<!--Alyssa Colasurdo-->
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
		<?php
		//get all information from the signup form
		$name= $_POST["name"];
		$gender= $_POST["gender"];
		$age= $_POST["age"];
		$personality= $_POST["personality"];
		$operating= $_POST["operating"];
		$minAge= $_POST["minAge"];
		$maxAge= $_POST["maxAge"];

		//save all information in one string
		$text= $name.",".$gender.",".$age.",".$personality.",".$operating.",".$minAge.",".$maxAge;

		//add string of new person to the singles.txt file
		$file= 'singles.txt';
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