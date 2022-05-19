<?php
	$hostname = "localhost";
	$username = "honorFlight";
	$password = "3RM)NzAF(_lV[VAv";
	$databaseName = "2022_honor_flight"
	
	$conn = new mysqli ($hostname, $userName, $password, $databaseName);
	
	//check connection
	if ($conn-> connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>
