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
$query = sprintf("SELECT * FROM Users WHERE `user_uname`='%s'",	mysqli_real_escape_string($link, $_GET['uname']));
if ($result = mysqli_query($link, $query)){
if ($row = mysqli_fetch_assoc($result)) {
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
		<title>Needful Things | New User</title>
		<link href='https://fonts.googleapis.com/css?family=Amarante' rel='stylesheet'>
		<style>
			.background-image {
				position: fixed;
				left: 0;
				right: 0;
				z-index: 1;
				display: block;
				color: black;
				background-image: url("images/shop.png") ;
				background-color: black;
				background-size: cover;
				width: 100%;
				height: 100%;
				-webkit-filter: blur(20px);
				-moz-filter: blur(20px);
				-o-filter: blur(20px);
				-ms-filter: blur(20px);
				filter: blur(20px);
			}
			.content {
				position: relative;
				text-align: center;
				z-index: 9998;
				color: white;
				font-family: 'Amarante';
			}
			.h1 {
				color: white;
				font-family: 'Amarante';
				font-size: 90px;
				position: relative;
				vertical-align: middle;
				line-height: 100px;
				text-shadow: 3px 3px black;
			}

			.menu_bar {
				position: absolute;
				margin: auto;
				text-align: center;
				border-radius: 5px;
				background: black;
				width: 100%;
			}

			.dropbtn {
				background-color: black;
				color: #b71500;
				padding: 5px;
				font-size: 16px;
				font-family: 'Amarante';
				border: none;
				cursor: pointer;
				position: relative;
				border-radius: 5px;
			}

			.return_home{
				position: relative;
				width: auto;
				display: inline-block;
				text-align: center;
				float: left;
				padding: 5px;
			}
			.return_home:hover .dropbtn {
				background-color: #300010;
				border-radius: 5px;
			}

			.center {
				position: relative;
				width: auto;
				display: inline-block;
				text-align: center;
				color: #b71500;
				padding: 7px;
				font-size: 16px;
				font-family: 'Amarante';
				cursor: pointer;
				border-radius: 6px;

			}

			.submit {
				position: relative;
				width: auto;
				display: inline-block;
				text-align: center;
				float: right;
				color: #b71500;
				padding: 5px;
				font-size: 16px;
				font-family: 'Amarante';
				cursor: pointer;
				border-radius: 6px;
				background-color: black;
				border: none;
			}
			.submit:hover {
				background-color: #300010;
			}

			.errorbox{
				text-align: center;
				z-index: 3;
			}
			.bottom_corner, p, .about_link {
				color: white;
				text-align: right;
				font-family: "Courier New", Courier, monospace;
				z-index: 4;
			}

		</style>
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
				<form method="get" action="login.php">
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
				</br>
				</div>
			</br>
			<hr>
			</br>
			<p class="content">Don't have an account? <a class="content" href="user_create.php">Sign up here</a></p>

			<div id="bottom_corner">
				<p>&copy; bmontoya, irhett 2017 </p>
				<a class="about_link" href="http://rickandmorty.wikia.com/wiki/Needful_Things">About</a>
			</div>
		</div>
	</body>
</html>
