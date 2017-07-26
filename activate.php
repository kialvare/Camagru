<?php
	session_start();
	if (!isset($_GET[hash]) || !isset($_GET[email]))
		header("Location: ../index.php");
	$hash = $_GET[hash];
	$email = $_GET[email];
?>
