<?php 
	//Gets the connection to the databse
	include '../config/getenv.php';
	$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>