<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "september_php";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$schema);

	// Check connection
	if ($conn->connect_error) {
		//echo "<br/>Unable to connect to database";
		die("Connection Failed");
	}
	
	
	$sql="select id,name,age,city,hobbies from employee_modified";
	
	$result = $conn->query($sql);
	
	var_dump($result);
	

?>