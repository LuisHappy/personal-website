<?php 
	include 'mysql_Connection.php';
	die('testing');

	$sqlGet = "SELECT * FROM VIDEODATALINKS";
	$query = mysql_query($dbcon, $sqlGet) or die("Error getting info");
	$results = mysql_fetch_assoc($query);
    echo json_encode($results);
	// echo $results;
?>