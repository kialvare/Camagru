<?php
$dest = "mysql:host;port=8080";
$user = "kialvare";
$pass = "4rfv2wsx";

// Main
try {
	$pdo = new PDO($dest, $user, $pass);
	$pdo->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::CASE_NATURAL);
	print("CONNECTION successful" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}

try {
	$pdo->query("CREATE DATABASE IF NOT EXISTS camagru");
	print("DATABASE camagru created" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}

// Users
try {
	$sql = "CREATE TABLE IF NOT EXISTS user (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	hash VARCHAR(255) NOT NULL,
	active BOOLEAN DEFAULT 0);";
	$pdo->query($sql);
	print("TABLE user create" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}

// Images
try {
	$sql = "CREATE TABLE IF NOT EXISTS image (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_user INT UNSIGNED NOT NULL,
	FOREIGN KEY(id_user) REFERENCES user(id),
	src VARCHAR(255) NOT NULL,
	date DATE NOT NULL);";
	$pdo->query($sql);
	print("TABLE image created" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}

// Likes
try {
	$sql = "CREATE TABLE IF NOT EXISTS likes (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_user INT UNSIGNED NOT NULL,
	FOREIGN KEY(id_user) REFERENCES user(id),
	id_image INT UNSIGNED NOT NULL,
	FOREIGN KEY(id_image) REFERENCES image(id));";
	$pdo->query($sql);
	print("TABLE likes created" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}

// Comments
try {
	$sql = "CREATE TABLE IF NOT EXISTS comments (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	id_user INT UNSIGNED NOT NULL,
	FOREIGN KEY(id_user) REFERENCES user(id),
	id_image INT UNSIGNED NOT NULL,
	FOREIGN KEY(id_image) REFERENCES image(id),
	text VARCHAR(255) NOT NULL,
	date DATE NOT NULL);";
	$pdo->query($sql);
	print("TABLE comments created" . PHP_EOL);
} catch (PDOException $e) {
	print("Error: " . $e->getMessage() . PHP_EOL);
}
?>
