<?php

	include('DB.php');
	include('Tutorial.php');
	
	$tutorial_id = $_GET["tutorial_id"];
	
	$db = new DB();
	$conn = $db->connect();

	$tutorial = new Tutorial($conn);
	
	$lectures = $tutorial->lectures($tutorial_id);
	echo "<table border='1'>";
	echo "<tr><td>Lecture Id</td><td>Lecture Name</td></tr>";
	foreach($lectures as $lecture) {
		echo "<tr>";
			echo "<td>".$lecture["id"]."</td>";
			echo "<td>".$lecture["name"]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>