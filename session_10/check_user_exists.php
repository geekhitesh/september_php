<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "september_php";
	
	$user = $_GET["username"];
	

	// Create connection
	$conn = new mysqli($servername, $username, $password,$schema);

	// Check connection
	if ($conn->connect_error) {
		//echo "<br/>Unable to connect to database";
		die("Connection Failed");
	}
	
	
	$sql="select * from users where username ='".$user."'";
	
	$result = $conn->query($sql);
	
	echo $rows = $result->num_rows;
	

?>