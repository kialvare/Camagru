<?php
include('config.php');

try {
	$pdo = new PDO($DB_DEST, $DB_USER, $DB_PASS);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	die('Error: ' . $e->getMessage());
}
?>
