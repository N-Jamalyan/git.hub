<?php 
$hw = mysqli_connect('localhost', 'root', '', 'homework');
session_start();
if (isset($_GET['id'])) {
	$frid = $_GET['id'];
}
// echo $frid;
$usid = $_SESSION['id'];
	$sel = mysqli_query($hw, "SELECT * FROM `home10` WHERE `id`='$frid'");
	foreach ($sel as $value) {
		$x = $value['fname'];
		$y = $value['lname'];
	}

	mysqli_query($hw, "INSERT INTO `friends` (`usid`,`frid`,`fname`,`lname`) VALUES ('$usid','$frid','$x','$y')");
	header('location:profile.php');
?>