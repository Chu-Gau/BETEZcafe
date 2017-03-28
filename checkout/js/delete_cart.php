<?php
	session_start();
	$index=$_GET['index'];
	unset($_SESSION['ordered'][$index]);
	header("location:../");
	exit;
?>