<!--Alyssa Colasurdo HW 6-->
<!DOCTYPE html>
<html>
	<!--
	Homework 6 (Geekluv)
	This provided file is the front page that links to two of the files
	you are going to write, signup.php and matches.php.
	You can modify this file as necessary to move redundant code out to common.php.
	-->
		
	<head>
		<title>GeekLuv</title>
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
			<h1>Welcome!</h1>

			<ul>
				<li>
					<a href="signup.php">
						<img src="signup.gif" alt="icon" />
						Sign up for a new account
					</a>
				</li>

				<li>
					<a href="matches.php">
						<img src="heartbig.gif" alt="icon" />
						Check your matches
					</a>
				</li>
			</ul>
		</div>

		<div>
	<?footerset();?>
		</div>
	</body>
</html>
