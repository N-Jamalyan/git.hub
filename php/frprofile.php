<?php 
session_start();

	include_once('header.php');

$hw = mysqli_connect('localhost', 'root', '', 'homework');

	if (isset($_GET['id'])) {
		$_SESSION['usid'] = $_GET['id'];
	}
	$id = $_SESSION['id'];
		$usid = $_SESSION['usid'];


	$sel = mysqli_query($hw, "SELECT * FROM `home10` WHERE `id`='$usid'");
	foreach ($sel as $value) {
		$x = $value['fname'];
		$y = $value['lname'];
	}


?>
<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
	<div class="logdiv" style="margin-top: 50px;">
	<div class="big_div" style="display: flex;">
		<div>
		<div style="height: 100px; width: 400px; display: flex; align-items: center; background-color: white;">
			<div class="img_div">
				<?php
					$nsel = mysqli_query($hw, "SELECT * FROM `nkar` WHERE `userid`='$usid'");
					foreach ($nsel as $value) {
						$primg = $value['img'];
					}
					echo '<img style="	border-radius: 100px; width: 100px; height: 100px;" src="../img/'.$primg.'">';
				?>
			</div>
			<div class="name_div">
				<?= $x.' '.$y ?>
			</div>
		</div>
		<div style="min-height: 250px; width: 400px; display: flex; flex-flow: wrap; align-items: center; background-color: white; margin-top: 10px;">
			<?php
				$likecount = $_SESSION['likecount'];
				// $liksel = mysqli_query($hw, "SELECT * FROM `count` WHERE `imgid`='$likeimg'");
				// $likecount = 0;
				// 	foreach ($liksel as $value) {
				// 		$count = $value['count'];
				// 		if ($count==1) {
				// 			$likecount++;
				// 		}
				// 		else if($likecount>=1) {
				// 			$likecount--;
				// 		}
				// 	}

				$isel = mysqli_query($hw, "SELECT * FROM `nkar` WHERE `userid`='$usid'");
					foreach ($isel as $value) {
						$x = $value['img'];
						$y = $value['id'];
	echo '<div style="border:1px solid black; width:100px; margin-top:10px; margin-left:20px; height:100px;" class="profile_div"><img style="width:100px; height:100px;" src="../img/'.$x.'"><a class="a5";  href="like.php?id='.$value['id'].'">Like-'.$likecount.'</a></div>';
					}
			?>
		</div>
		</div>
	</div>
	</div>
	<div class="logdiv" style="width: 300px; min-height: 300px; margin-left: 30px; background-color: yellow;">
		<div style="display: flex; justify-content: center; flex-direction: column; text-align: center;">
			<h3>SMS</h3>
			<form method="POST">
				<input type="text" name="text">
				<input type="submit" name="">
			</form>


<?php

include_once('footer.php');

if (isset($_POST['text'])) {
	$sms = $_POST['text'];

mysqli_query($hw, "INSERT INTO `chat` (`fromid`,`toid`,`sms`) VALUES ('$id','$usid','$sms')");	

}

$smsel = mysqli_query($hw, "SELECT * FROM `chat`");

foreach ($smsel as $value) {
	$fromid = $value['fromid'];
	$toid = $value['toid'];

	if ($id == $fromid) {
		$fromsms = $value['sms'];
	echo '<p style="color: red;">'. $fromsms.'</p>'; 

	}
	if ($id == $toid) {
		$tosms = $value['sms'];
	echo '<p style="color: blue;">'. $tosms.'</p>'; 
	}

}

?>	
		</div>
	</div>