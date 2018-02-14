<?php 
	include 'mysql_Connection.php';
	// die('testing');

	$sqlGet = "SELECT * FROM VIDEODATALINKS";
	$query = mysqli_query($dbcon, $sqlGet) ;
	// $results = mysqli_fetch_assoc($query);
    // echo json_encode($results);
    $results = mysqli_fetch_assoc($query);
	print_r( $results );
?>