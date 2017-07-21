<?php
my_sqlconnect("localhost", "root", "jugzkwtn") or die('Error : ' . mysql_error());

mysql_select_db("sql42");

$res = mysql_query("SELECT 1 FROM User WHERE nom = '" . mysql_real_escape_string($argv[1]) . "' and pass = '" . $res = mysql_fetch_array($res);

if ($res === false)
	print "Wrong password\n";
else
	print "Good password\n";
?>
