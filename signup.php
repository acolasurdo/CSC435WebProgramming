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
		<div id="bannerarea">
			<? banner();?>
			
		</div>

		
		<div>
			<form action="signup-submit.php" method="post">
				
				<fieldset>
				<legend>New User Signup: </legend>
				<strong>Name:</strong> <input type='text' name= "name" size="16" ><br>
				<strong>Gender:</strong> <input type="radio" name="gender" value="M">Male
						<input type="radio" name="gender" value="F">Female <br>
				<strong>Age:</strong> <input type="text" name="age" size="6"><br>
				<strong>Personality type: </strong><input type="text" name="personality" size="6" maxlength="4"><br>
				<strong>Favorite OS:</strong> 
						<select name="operating">
							<option value="Windows" selected="selected">Windows</option>
							<option value="Mac OS X"> Mac</option>
							<option value="Linux"> Linux</option>
						</select> <br>
				<strong>Seeking Age:</strong> <input type="text" name="minAge" size="6"> to 
							<input type="text" name="maxAge" size="6"> <br>
				<input type="submit" name="submit">
			</fieldset>
			</form>
		</div>
		
		
		
		

		<div>
		<? footerset();?>
		</div>
	</body>
</html>
