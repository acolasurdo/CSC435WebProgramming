<?php
//Alyssa Colasurdo HW 6
function headerset(){ //this function sets the standard html header information
	echo '<meta charset="utf-8" />
	
	<!-- instructor-provided CSS and JavaScript links; do not modify -->
	<link href="heart.gif" type="image/gif" rel="shortcut icon" />
	<link href="Geekluv.css" type="text/css" rel="stylesheet" />';
}
	
function banner(){ //this function sets the standard html banner
		echo '<img src="nerdxing.jpg" alt="banner logo" /> <br />
		where meek geeks meet';
}

function footerset(){ //this function sets the standard html footer
			echo '<p>
				This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.
			</p>
			
			<p>
				Results and page (C) Copyright Geekluv Inc.
			</p>
			
			<ul>
				<li>
					<a href="geekluv.php">
						<img src="back.gif" alt="icon" />
						Back to front page
					</a>
				</li>
			</ul>';
}?>
