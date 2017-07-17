<?php
session_start();
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
<body>
<header id="nav-container">
	<h1 id="title">Camagru</h1>
</header>
<section id="container">
	<div id="userInfo">
		<form action="login.php" method="post">
			<input type="text" name="login" placeholder="login" id="login">
			<br>
			<input type="password" name="passwd" placeholder="password" id="password">
			<br>
			<input type="button" name="signup" value="Sign Up" id="signup">
		</form>
	</div>
</section>
<footer>
</footer>
</body>
</html>
