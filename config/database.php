<?php
	$query = $pdo->exec("
	CREATE TABLE IF NOT EXISTS 'Accounts' {
		'uid' INT(12) AUTO_INCREMENT,
		'username' VARCHAR(255) NOT NULL,
		'password' VARCHAR(255) NOT NULL,
		'email' VARCHAR(255) NOT NULL,
		'firstName' VARCHAR(255) NOT NULL,
		'lastName' VARCHAR(255) NOT NULL,
		PRIMARY KEY ('uid');
	};");
	
	$query1 = $pdo->exec("
	CREATE TABLE IF NOT EXISTS 'Images' {
		'imageID' INT(12) AUTO_INCREMENT,
		'username' VARCHAR(255) NOT NULL,
		'posted' VARCHAR(255) NOT NULL,
		'imagepath' VARCHAR(255) NOT NULL,
		'album' VARCHAR(255),
		'caption' VARCHAR(255),
		PRIMARY KEY ('imageID'); 
	};");

	$query2 = $pdo->exec("
		CREATA TABLE IF NOT EXISTS 'Comments' (
		'commenter' VARCHAR(255) NOT NULL,
		'imageID' INT(12) NOT NULL,
		'posted' VARCHAR(255) NOT NULL,
		'comment' VARCHAR(255) NOT NULL
	);");

	$query3 = $pdo->exec("
		CREATE TABLE IF NOT EXISTS 'Likes' (
		'likeUser' VARCHAR(255) NOT NULL,
		'imageID' INT(12) NOT NULL,
		'posted' VARCHAR(30) NOT NULL,
		'status' BOOLEAN NOT NULL
	);");
?>
