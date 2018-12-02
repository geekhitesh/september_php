<?php


class DB{
	
	public function __construct() {
		
	}
	
	public function connect() {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "september_tutorials";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$schema);

		// Check connection
		if ($conn->connect_error) {
			die("Connection Failed");
		}
		
		return $conn;	
		
	}
	
}

?>