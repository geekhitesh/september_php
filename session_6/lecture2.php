<?php

	$servername = "localhost";
	$username = "root1sdsd";
	$password = "wwsdsd";
	$schema = "september_php";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$schema);

	// Check connection
	if ($conn->connect_error) {
		//echo "<br/>Unable to connect to database";
		die("Connection Failed");
	}

	
	
	echo "<br/>Connected Successfully";	
	
	
	
	

?>