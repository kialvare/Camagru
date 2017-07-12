<?php
include("config.php");
?>
<?php
try {
	$pdo = new PDO($DB_DEST, $DB_USER, $DB_PASS);
}
catch (Exception $e) {
	$pdo_create_db = 0;
	echo "Connection blurp<br />";
	$pdo = new PDO($DB_DEBUG, $DB_USER, $DB_PASS);
	$req = "CEREATE DATABASE IFNOT EXISTS `".$DB_NAME."` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	$pdo->prepare($req)->execute();
}
?>
