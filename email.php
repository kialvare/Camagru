<?php
static function sendEmail($email, $hash) {
	$subject = "Camagru - Sign Up Confirmation";
	$message =
	"<html>
		<body>
		<h2>Validate your sign up</h2>
		<a href='http://localhost:8080/activation.php?hash=" . $hash . "&email=" . $email ."'>Click here to validate</a>
		</body>
	</html>";
	$headers = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=8' . "\r\n";
	$headers .= 'From: noreply@42camagru.com';
}
?>
