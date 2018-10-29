<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$schema = "september_php";

	

	// Step 1 - Create connection
	$conn = new mysqli($servername, $username, $password,$schema);

	// Check connection
	if ($conn->connect_error) {
		//echo "<br/>Unable to connect to database";
		die("Connection Failed");
	}
	
	//step 2 - prepare the query
	//$sql="update employee_modified set city='itawa' where city='Itanagar'";
	$sql="select id,name,age,city from employee_modified where city='itawa'";
	
	// step 3 - Execute the query
	$result = $conn->query($sql);
	
	var_dump($result);
	
	
	// close the connection
	

?>