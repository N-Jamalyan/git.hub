<?php 
	session_start();

	
	include_once('header.php');

$hw = mysqli_connect('localhost', 'root', '', 'homework');

$id = $_SESSION['id'];

$sel = mysqli_query($hw, "SELECT * FROM `home10` WHERE `id`='$id'");

foreach ($sel as $value) {
	$f = $value['fname'];
	$l = $value['lname'];
}
	
	// mysqli_query($hw, "INSERT INTO `friends` (`usid`) VALUES ('$id')");

?>

<body style="height: 100vh; display: flex; align-items: center; justify-content: center;">
	<div class="logdiv" style="margin-top: 50px;">
	<div class="big_div" style="display: flex;">
		<div>
		<div style="height: 100px; width: 400px; display: flex; align-items: center; background-color: white;">
			<div class="img_div">
				<?php
					$nsel = mysqli_query($hw, "SELECT * FROM `home10` WHERE `id`='$id'");
					foreach ($nsel as $value) {
						$primg = $value['w/mimg'];
					echo '<img style="	border-radius: 100px; width: 100px; height: 100px;" src="../img/'.$primg.'">';
					}

				?>
			</div>
			<div class="name_div">
				<?= $f.' '.$l ?>
			</div>
		</div>
			<div style="width: 400px; height: 50px; border: 1px solid green; display: flex; align-items: center; justify-content: center;">
				<form method="POST" action="addimgproces.php"  enctype="multipart/form-data">
					<input style="background-color: black" type="file" name="file">
					<input style="width: 100px; height: 40px; border:1px solid grey;" type="submit" name="">
				</form>
			</div>
		<div style="min-height: 250px; width: 400px; display: flex; flex-flow: wrap; align-items: center; background-color: white; margin-top: 10px;">
			<?php
				$isel = mysqli_query($hw, "SELECT * FROM `nkar` WHERE `userid`='$id'");
					foreach ($isel as $value) {
						$x = $value['img'];
						$y = $value['id'];
	echo '<div style="border:1px solid black; width:100px; margin-top:10px; margin-left:20px; height:100px;" class="profile_div"><img style="width:100px; height:100px;" src="../img/'.$x.'"><a class="a5";  href="profprogres.php?id='.$value['id'].'">Profil</a></div>';
					}
			?>
		</div>
		</div>
		<div style="width: 800px; min-height: 250px; background-color: grey; display: flex; justify-content: space-around;">
			<div class="users_div">
				<h3>USERS</h3>
				<?php
				$ussel = mysqli_query($hw, "SELECT * FROM `home10`");
					echo '<table width="300px" height="200px" border="1px" ;>';
						foreach ($ussel as $value) {
							echo '<tr>';
							if ($value['id']!=$id) {
								echo '<td style="color:white">'.$value['fname'].' '.$value['lname'].'</td>';
							
								echo '<td><button style="border:none; background-color: white;"><a class="a6" href="friends.php?id='.$value['id'].'">Subscribe</a></button></td>';
							echo '</tr>';
							}
						}
					echo '</table>';
				?>
			</div>
			<div class="users_div">
				<h3>FRIENDS</h3>
				<?php
				$frsel = mysqli_query($hw, "SELECT * FROM `friends` WHERE `usid`='$id'");
					echo '<table width="300px" height="200px" border="1px" ;>';
						foreach ($frsel as $value) {
							echo '<tr>';
								echo '<td style="color:white">'.$value['fname'].' '.$value['lname'].'</td>';
								echo '<td><button style="border:none; background-color: white;"><a class="a6" href="frprofile.php?id='.$value['frid'].'">View Profile</a></button></td>';
							echo '</tr>';
						}
					echo '</table>';
				?>
			</div>
		</div>
	</div>
	</div>

<?php 

include_once('footer.php');

?>