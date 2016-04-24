<!--Alyssa Colasurdo HW 6-->
<!DOCTYPE html>
<html>
	<head>
		<title>GeekLuv Matches</title>
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
			<form action="matches-submit2.php" method="get">
				<fieldset>
				<legend>Returning User: </legend>
				<strong>Name:</strong> <input type='text' name= "name" size="16" ><br>
				<input type="submit" name="submit" value="View My Matches"> 
			</fieldset>
			</form>
		</div>
		
		
		
		

		<div>
		<?footerset();?>
		</div>
	</body>
</html>