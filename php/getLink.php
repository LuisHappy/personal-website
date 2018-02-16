<?php 
	include 'mysql_Connection.php';
	// die('testing');

	$sqlGet = "
	SELECT * FROM VIDEODATALINKS ORDER BY id DESC LIMIT 1;
	";
	$query = mysqli_query($dbcon, $sqlGet) ;
	// $results = mysqli_fetch_assoc($query);
    // echo json_encode($results);
    $results = mysqli_fetch_assoc($query);
    echo $results['LINK'];
	// print_r( $results );
?>