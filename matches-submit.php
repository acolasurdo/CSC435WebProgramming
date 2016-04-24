<!--Alyssa Colasurdo HW 6-->
<!DOCTYPE html>
<?php
		$name= $_GET["name"];
		$file= file("singles.txt");
		
		//go through file to find name, save as user
		$user="";
		for($i=0; $i < count($file); $i++)
		{
			if(strstr($file[$i], $name)){
				$user= $file[$i];
			}
				
		}
		
		//convert string $user into an array
		$user_info= explode(",", $user);
		//get all of the needed information form the user array
		$gender= $user_info[1];
		$age= $user_info[2];
		$personality= $user_info[3];
		$operating= $user_info[4];
		$minAge= $user_info[5];
		$maxAge= $user_info[6];
		
function checkgender($gender, $tmp_gender){
	if($gender != $tmp_gender){
		return true;
	}
	else{
		return false;
	}
}

function setuserimg($tmp_gender){
		if($tmp_gender=="M")
		{	
			return "userm";
		}
		else
		{
			return "user";
		}
}

function checkage($minAge, $maxAge, $tmp_age){
	if($tmp_age >= $minAge && $tmp_age <= $maxAge){
		return true;
	}
	else
	{
		return false;
	}
}

function checkoperating($operating, $tmp_operating){
		if($operating == $tmp_operating || ($operating == "Mac OS X" && $tmp_operating=="Linux")){
			return true;
		}
		else{
			return false;
		}
							
}

function checkpersonality($personality, $tmp_personality){
					
	//get first-fourth letter for both to compare
	$first_1= substr($personality, 0, 1);
	$first_2= substr($tmp_personality, 0, 1);
	$second_1= substr($personality, 1, 1);
	$second_2= substr($tmp_personality, 1, 1);
	$third_1= substr($personality, 2, 1);
	$third_2= substr($tmp_personality, 2, 1);
	$fourth_1= substr($personality, 3, 1);
	$fourth_2= substr($tmp_personality, 3, 1);
				
	if(($first_1==$first_2)||($second_1==$second_2)||($third_1==$third_2)||($fourth_1==$fourth_2)){
		return true;
	}
	else{
		return false;
	}
}

?>
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
			<?banner();?>
		</div>

		<h1>Matches for <?= $name?></h1>
		
		<div>
			<ul>
			<?php
			//find a match
			for($i=0; $i< count($file); $i++){
				//these are all of the necessary variables to solve the comparisions
				//store string of the current persons info
				$tmp_person= $file[$i];
				//convert the string into an array
				$tmp_person_array= explode(",", $tmp_person);
				//this is to determine the image used if the person is a match
				$userimg="";
		
				//opposite gender
				if(checkgender($gender, $tmp_person_array[1])){
					//store type of image name
					$userimg= setuserimg($tmp_person_array[1]);
					//compatible ages
					if(checkage($minAge, $maxAge, $tmp_person_array[2])){
						//same operating
						if(checkoperating($operating, $tmp_person_array[4])){
							//share at least one letter in same position
							if(checkpersonality($personality, $tmp_person_array[3])){ 
								//all are true so it is a match!
								//create a li item  ?>
								<li class="match">
									<p> <img src="<?=$userimg?>.png"><?=$tmp_person_array[0]?></p>
									
									<strong>gender: </strong> <?=$tmp_person_array[1]?><br>
									<strong>age: </strong><?=$tmp_person_array[2]?><br>
									<strong>type: </strong><?=$tmp_person_array[3]?><br>
									<strong>OS: </strong><?=$tmp_person_array[4]?><br>
								</li>
					
						<?	}
						}
					}
				}
			}
			?>
		</ul>
		</div>
		
		
		
		

		<div>
		<?footerset();?>
		</div>
	</body>
</html>