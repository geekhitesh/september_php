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
	
	
	$sql="insert into employee_modified(name,age,city) values('TEMP','29','Noida')";
	
	$result = $conn->query($sql);
	
	var_dump($result);
	

?>