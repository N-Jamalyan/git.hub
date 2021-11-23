<?php
	session_start();
	$hw = mysqli_connect('localhost', 'root', '', 'homework');
	
	if(isset($_GET['id'])){
		$imgid = $_GET['id'];
		echo $imgid;
	}
	$id = $_SESSION['id'];
	$usid = $_SESSION['usid'];
	// $_SESSION['likeimg'] = $imgid;

	$sel = mysqli_query($hw, "SELECT * FROM `count` WHERE `usid`='$id' AND `frid`='$usid' AND `imgid`='$imgid'");
	
	if (mysqli_num_rows($sel)==0) {
		mysqli_query($hw , "INSERT INTO `count` (`usid`,`frid`,`imgid`,`count`) VALUES ('$id','$usid','$imgid','0')");
	}
	else {
		$countsel = mysqli_query($hw, "SELECT * FROM `count`  WHERE `usid`='$id' AND `frid`='$usid'");
		foreach ($countsel as $value) {
			$count = $value['count'];
		}
		if($count == '1'){
			mysqli_query($hw, "UPDATE  `count` SET `count`='2' WHERE `imgid`='$imgid'");
		}
		else{
			mysqli_query($hw, "UPDATE  `count` SET `count`='1' WHERE `imgid`='$imgid'");
		}
	}
	$liksel = mysqli_query($hw, "SELECT * FROM `count` WHERE `imgid`='$imgid'");
	foreach ($liksel as $value) {
			$count = $value['count'];
			echo $count;
	}
				$likecount = 0;
					foreach ($liksel as $value) {
						$count = $value['count'];
						if ($count==1) {
							$likecount++;
						}
						else if($likecount>=1) {
							$likecount--;
						}
					}
$_SESSION['likecount'] = $likecount;
	header('location:frprofile.php');
?>