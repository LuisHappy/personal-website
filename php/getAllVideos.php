<?php 
	include 'mysql_Connection.php';
	$sqlGet = "
	SELECT * FROM VIDEODATALINKS;
	";
	$query = mysqli_query($dbcon, $sqlGet) ;
    $results = mysqli_fetch_assoc($query);
    echo $results['LINK'];
?>