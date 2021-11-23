<?php 
// session_start();
if (!isset($_SESSION['lang'])) {
	$_SESSION['lang']='eng';
	
}
else {
	if (isset($_GET['lang']) && !empty($_GET['lang'])) {
		if ($_GET['lang']=='arm') {
			$_SESSION['lang']='arm';
		}
		else if ($_GET['lang']=='rus') {
			$_SESSION['lang']='rus';
		}
		else {
			$_SESSION['lang']='eng';
		}
	}
}

$lang = $_SESSION['lang'];

	include_once("$lang".'.php');




// session_unset();

?>