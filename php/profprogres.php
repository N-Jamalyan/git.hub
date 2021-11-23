<?php 
session_start();
$hw = mysqli_connect('localhost', 'root', '', 'homework');
$id = $_SESSION['id'];
if(isset($_GET['id'])){
	$imgid = $_GET['id'];

	$sel = mysqli_query($hw, "SELECT `img` FROM `nkar` WHERE `id` = '$imgid'");
	foreach ($sel as $value) {
	
	$imgname = $value['img'];
	}
	echo $imgname;
	mysqli_query($hw, "UPDATE `home10` SET `w/mimg` = '$imgname' WHERE `id` = '$id'");
	header('location:profile.php');

}



?>