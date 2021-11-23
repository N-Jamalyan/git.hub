<?php 
session_start();
$id = $_SESSION['id'];
echo $id;
$hw = mysqli_connect('localhost', 'root', '', 'homework');
	
	$x = '../img/';
	$imgnam = $_FILES['file']['name'];
	$y = $x.$imgnam;
	echo $y;


		$imgtype = pathinfo($y, PATHINFO_EXTENSION);

	$size = $_FILES['file']['size'];

	$arr = [];


	if ($imgtype != 'jpg' && $imgtype != 'png' && $imgtype != 'jpeg'  && $imgtype != 'gif') {
		array_push($arr , 'type_error');
	}
	print_r($arr);
	echo count($arr);

	if (count($arr)==0) {

		if (move_uploaded_file($_FILES['file']['tmp_name'] , $y)) {

			mysqli_query($hw , "INSERT INTO `nkar` (`userid`,`img`) VALUES ('$id','$imgnam')");
			header('location:profile.php');
		}
	}



?>