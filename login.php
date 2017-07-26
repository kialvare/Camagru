<?php
session_start();
if (isset($_SESSION['user_id'])) {
header("Location: index.php");
}
if (!$link)
header("Location: index.php");
$query = sprintf("SELECT * FROM Users WHERE `user_uname`='%s'",	mysql_real_escape_string($link, $_GET['uname']));
if ($result = mysql_query($link, $query)){
if ($row = mysql_fetch_assoc($result)) {
if ($row['user_passwd'] === get_hash($_GET['passwd'])) {
$_SESSION['user_id'] = $row['user_id'];
$_SESSION['user_uname'] = $row['user_uname'];
$_SESSION['user_auth'] = $row['user_auth'];
header("Location: index.php");
} else { $ret = "Incorrect username or password\n";	}
} else { $ret = "User not found\n";	}
} else { $ret = "Error\n"; }
}
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	</body>
</html>
