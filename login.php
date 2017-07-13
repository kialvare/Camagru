<?php
session_start();
$ret = "";
if (isset($_SESSION['user_id'])) {
header("Location: index.php");
}
if ($_GET['submit'] == 'Submit' && $_GET['passwd'] && $_GET['uname']) {
require 'user_hash.php';
require 'db_init.php';
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

<html>
	<head>
	</head>
	<body>
		<div class="background-image"></div>
		<div class="content">
			<h1 class="h1"></br>NEEDFUL THINGS</h1>
			<img src="images/right.png">
			</br>
			<div class="errorbox">
				<?php
				echo $ret;
				?>
			</div>
			<div class="menu_bar">
				<div class="return_home">
					<button class="dropbtn" title="make Mr. Needful cry :'(" onclick="location.href='index.php'">Return Home</button>
				</div>
				<form method="post" action="login.php">
					<div class="center">
						Username: <input type="text" name="uname" value="<?php echo $_GET['uname'];?>" />
					</div>
					<div class="center">
						Password: <input name="passwd" type="password" value="" />
					</div>
					<div class="submit">
						<input class="submit" type="submit" name="submit" value="Submit">
					</div>
				</form>
				</div>
			</div>
	</body>
</html>
