<?php 
	session_start();
	include_once('header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body style="height: 100vh; display: flex; justify-content: center; align-items: center;">
	<div class="logdiv">
		<form class="ftxt" method="POST">
			<input placeholder="login(***@mail.ru)" type="email" name="login">
			<br>
			<br>
			<input placeholder="******" type="password" name="password">
			<br>
			<br>
			<input style="color: black; border: none; background-color: grey;" type="submit" name="" value="<?= $form['submit'] ?>">
		</form>
	</div>
</body>
</html>







<?php 

include_once('footer.php');


$hw = mysqli_connect('localhost', 'root', '', 'homework');
	
	if (isset($_POST['login']) && isset($_POST['password'])) {
		$x = $_POST['login'];
		$y = $_POST['password'];

		$sel = mysqli_query($hw, "SELECT * FROM `home10`");
		foreach ($sel as $value) {
			$z = $value['login'];
			$c = $value['password'];

			if ($x==$z && $y==$c) {
				$_SESSION['id']=$value['id'];
				header('location:profile.php');
			}
		}
	}



?>

