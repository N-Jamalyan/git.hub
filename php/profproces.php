<?php 
session_start();
$hw = mysqli_connect('localhost', 'root', '', 'homework');

$userid=$_SESSION['id'];
if(isset($_POST['file'])){
	$img = $_POST['file'];

mysqli_query($hw , "INSERT INTO `nkar` (`img`,`userid`) VALUES ('$img','$userid')");
header('location:profile.php');
}

?>
