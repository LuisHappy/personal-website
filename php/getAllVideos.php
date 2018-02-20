<?php 
	//Getting the connnection
	include 'mysql_Connection.php';
	
	//Query that will be used to return all of the information from the database
	$sqlGet = "
		SELECT * FROM VIDEODATALINKS;
	";

	$query = mysqli_query($dbcon, $sqlGet);
    $results = [];
    while ($row = mysqli_fetch_assoc($query) ) {
    	array_push($results, $row['LINK']);
    }

    //Passes it back in a friendly way that JavaScript can use for arrays
	echo json_encode($results);
?>