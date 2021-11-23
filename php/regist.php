<?php 
	session_start();

include_once('header.php');
?>
<body style="display: flex; align-items: center; justify-content: center; height: 100vh;">
	<div class="logdiv">
	<form class="ftxt" method="POST">
		<input placeholder="fname" type="text" name="fname">
		<br>
		<br>
		<input placeholder="lname" type="text" name="lname">
		<br>
		<br>
		<input placeholder="login(***@mail.ru)" type="email" name="login">
		<br>
		<br>
		<input placeholder="*****" type="password" name="password">
		<br>
		<br>
		<input style="width: 30px; height: 30px;" type="radio" name="w/m" value="man"> <span style="color: white;">MAN</span>
		<input style="width: 30px; height: 30px;" type="radio" name="w/m" value="woman"> <span style="color: white;">WOMAN</span>
		<br>
		<br>
		<input style="color: black; border: none; background-color: grey;" type="submit" name="" value="<?= $form['submit'] ?>">

	</form>
	</div>
<?php 

include_once('footer.php');

$hw = mysqli_connect('localhost', 'root', '', 'homework');

if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['w/m'])) {
	$x = $_POST['fname'];
	$y = $_POST['lname'];
	$z = $_POST['login'];
	$p = $_POST['password'];
	$w = $_POST['w/m'];
	if ($w=='man') {
		$w='man';
		$wimg = 'man.png';
	}
	else {
		$w='woman';
		$wimg = 'woman.png';
	}

	mysqli_query($hw, "INSERT INTO `home10` (`fname`,`lname`,`login`,`password`,`w/m`,`w/mimg`) VALUES ('$x','$y','$z','$p','$w','$wimg')");
	header('location:login.php');
}
?>