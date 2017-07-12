<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['user_uname']);
	unset($_SESSION['user_auth']);
	header("Location: index.php");
?>
