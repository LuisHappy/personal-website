<?php 
	//Getting connection
	include 'mysql_Connection.php';
	//Query that will be used to return the latest video
	$sqlGet = "
	SELECT * FROM VIDEODATALINKS ORDER BY id DESC LIMIT 1;
	";
	$query = mysqli_query($dbcon, $sqlGet) ;
    $results = mysqli_fetch_assoc($query);
    echo $results['LINK'];
?>