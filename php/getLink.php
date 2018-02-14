<?php 
	include 'mysql_Connection.php';

	$sqlGet = "SELECT * FROM VIDEODATALINKS";
	$results = mysql_query($dbcon, $sqlGet) or die("Error getting info");
	return $results;
?>