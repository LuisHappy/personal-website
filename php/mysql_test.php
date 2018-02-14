<?php 
	DEFINE ('DB_USER', 'websiteUser');
	DEFINE ('DB_HOST', 'localhost');
	DEFINE ('DB_PASS', 'lw885M9lO9GMmN9q');
	DEFINE ('DB_NAME', 'website');

	$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if (!$dbcon) {
		die("Erro connecting to database");
	} else {
		echo "You have connected succesfully";
	}
?>