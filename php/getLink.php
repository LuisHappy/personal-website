<?php 
	include 'mysql_Connection.php';

	$sqlGet = "SELECT * FROM VIDEODATALINKS";
	$results = mysqli_query($dbcon, $sqlGet) or die("Error getting info");
	echo $results;
?>