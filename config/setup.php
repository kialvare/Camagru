<?php
include('config.php');

try {
	$pdo = new PDO($DB_DEST, $DB_USER, $DB_PASS);
	$pdo->exec("CREATE DATABASE IF NOT EXISTS Camagru; USE Camagru");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
	include('database.php');
}
catch(PDOException $e) {
	die('Error: ' . $e->getMessage());
}
?>
