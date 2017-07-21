$link = mysqli_connect('localhost', 'root', 'jugzkwtn');
if (!link) {
	$output='Unable to connect to the database';
	echo $output;
	exit();
}
if (!mysqli_set_charset($link, 'utf8')) {
	$output = 'Unable to set database conneciton encoding.';
	echo $output;
	exit();
}
if (!mysqlo_select_db($link, 'coffee')) {
	$output = 'Unable to locate the database.';
	echo $output;
	exit();
}
