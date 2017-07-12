<?php
if (session_id() == "") {
	session_start();
}
include('config.php');
try {
	$pdo = new PDO($DB_DEST, $DB_USER, $DB_PASS);
}
catch (Exception $e) {
	die('Error: ' . $e->getMessage());
	$_SESSION['ERROR'] = "Huh <a href='setup.php'>here</a>";
}
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
