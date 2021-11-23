<?php

	include_once('lang.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	<script type="text/javascript" src="../js/jquery.js"></script>

<div id="big">
<div id="logomenu" class="menu_logo">
		<div class="logo_div">
			<img style="width: 80px; height: 80px;" src="../img/logo.png">
		</div>
			<div class="menu_div">
				<nav>
					<ul>
						<li class="con1">
							<a class="a1" href="?lang=arm">ARM</a>
							<a class="a1" href="?lang=rus">RUS</a>
							<a class="a1" href="?lang=eng">ENG</a>
						</li>
						<li class="con1"><a class="a1" href="../home.php"><?= $form['home'] ?></a></li>
						<li class="con1"><a class="a1" href="login.php"><?= $form['login'] ?></a></li>
						<li class="con1"><a class="a1" href="regist.php"><?= $form['regist'] ?></a></li>
						<li class="con">
							<input type="checkbox" id="toggle">
							<label class="toggle" for="toggle"><?= $form['contact'] ?></label>
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
</div>
	<div id="nortxt">
		<h1><?= $form['welcome'] ?></h1>
	</div>

	