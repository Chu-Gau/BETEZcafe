<?php	
	session_start();
	$soluongmoi=$_POST['slm'];
	$index=$_POST['index'];
	$_SESSION['ordered'][$index]=$soluongmoi;
	// die($soluongmoi."  ".$index);
	// var_dump($_POST);
?>