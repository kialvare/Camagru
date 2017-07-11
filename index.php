<?php
session_start();
$servername ="e1z3r5p4:8080";
$username = "username";
$password = "password";
$dbname = "camagru";
mysql_connect("");
echo 'Connected successfully';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Camagru</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script>
		
	</script>
</head>
<body>
<header>
	<h1 id="title">Camagru</h1>
</header>
<section class="container">
	<div id="userInfo">
		<input type="text" name="login" placeholder="login" id="login">
		<input type="password" name="password" placeholder="password" id="password">
	</div>
</section>
<footer>
</footer>
</body>
</html>
