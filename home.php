<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title></title>
</head>
<body>
<?php
	session_start();
	$hw = mysqli_connect('localhost', 'root', '', 'homework');


						$sel = mysqli_query($hw , "SELECT * FROM `lezuner`");

						foreach ($sel as $value) {
							
							echo '<a class="a1" style="margin-left:5px;" href="?langid='.$value['id'].'">'.$value['langname'].'</a>';
						}

	if (isset($_GET['langid'])) {
							$x = $_GET['langid'];
						
						$langsel = mysqli_query($hw , "SELECT * FROM `text` WHERE `lengid` = '$x'");

						foreach ($langsel as $value) {
						
?>
	<div id="big">
	<div id="logomenu" class="menu_logo">
		<div class="logo_div">
			<img style="width: 80px; height: 80px;" src="img/logo.png">
		</div>
		<div class="menu_div">
			<nav>
				<ul> 
					<li><a class="a1" href="home.php"><?= $value['home']; ?></a></li>
					<li><a class="a1" href="php/login.php"><?= $value['login']; ?></a></li>
					<li><a class="a1" href="php/regist.php"><?= $value['regist']; ?></a></li>
					<li>
						<input type="checkbox" id="toggle">
						<label class="toggle" for="toggle"><?= $value['contact']; ?></label>
						<dialog>
						  <p style="color: white;">
						  <span style="color: yellow;">PHONE</span> - <span style="color: red;">099-888-777</span><br><br>
						  <span style="color: yellow;">EMAIL</span> - <span style="color: red;">norik@mail.ru</span>
						  </p>
						</dialog>
					</li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="hometext">
							
		<h1><?= $value['title'];?></h1>
	</div>
		<div>
		<h3 class="txt">
			<span style="color: red;">Описание</span><br>
			<em>*Подписывайтесь на обновления друзей, делитесь всеми моментами дня и открывайте для себя мир.<br> *Откройте для себя сообщество, где всем рады.<br>* Делитесь впечатлениями и общайтесь с друзьями <br>* Создавайте из фото и видео истории, исчезающие через 24 часа, и делайте их ещё интереснее с помощью наших инструментов оформления.<br>* Отправляйте сообщения в Direct. Переписывайтесь с друзьями о том, что вам понравилось в ленте и Stories.<br>* Публикуйте в ленте фото и видео, которые вы хотите видеть в своем профиле.Смотрите видео, подобранные специально для ваc<br>* Вдохновляйтесь фото и видео новых аккаунтов в разделе интересного.* Открывайте для себя новые бренды и совершайте покупки.</em>
		</h3>
	</div>
	</div>
	<div id="nortxt" style="text-align: center;">
		<h1><?= $value['welcome'];?></h1>
	</div>


<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
<?php

}
	}
?>