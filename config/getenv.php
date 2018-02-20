<?php 
	// echo $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];;
	$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, "localhost") !== false)
		require_once 'development.php';
	else
		require_once 'production.php';

?>