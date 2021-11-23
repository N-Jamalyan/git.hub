<?php
session_start();

$fromid = $_SESSION['id'];

if (isset($_GET['id'])) {
	$toid = $_GET['id'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="text">
		<input type="submit" name="">
	</form>
</body>
</html>

<?php
$hw = mysqli_connect('localhost', 'root', '', 'homework');

if (isset($_POST['text'])) {
	$sms = $_POST['text'];

mysqli_query($hw, "INSERT INTO `chat` (`fromid`,`toid`,`sms`) VALUES ('$fromid','$toid','$sms')");	

header('location:profile.php');
}

?>