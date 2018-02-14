<?php 
	DEFINE ('DB_USER', 'root');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_PASS', 'password');
	DEFINE ('DB_NAME', 'website');

	$dbcon = mysql_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// if (!$dbcon) {
	// 	die("Erro connecting to database");
	// } else {
	// 	echo "You have connected succesfully";
	// }
?>