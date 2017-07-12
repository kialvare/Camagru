<?php
session_start();
header("Location: ". $_SERVER['HTTP_REFERER']);

if ($_POST['loginButton'] == "login") {
	if (auth($_POST['login'], $_POST['passwd'])) {
		$_SESSION['logged_on_user'] = $_POST['login'];
		echo "Successful Login!";
	}
	else {

}
?>
