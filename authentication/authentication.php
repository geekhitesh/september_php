<?php


class Authentication {
	private $username;
	private $password;
	private $conn;
	
	public function __construct($username,$password) {
		$this->username = $username;
		$this->password = $password;
		$this->connectToDb();
	}
	
	private function connectToDb() {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$schema = "september_php";

		// Create connection
		$this->conn = new mysqli($servername, $username, $password,$schema);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection Failed");
		}
			
		
	}
	
	public function authenticate() {
		$query = "select name,age,city,username from users where username='".$this->username."' and password='".$this->password."'";
		
		$result = $this->conn->query($query);
		
		if($result->num_rows ==1)
		{
			echo "Login Successful";
		}
		else
		{
			echo "Invalid username/password";
		}
		
	}	
}

	$username = $_POST['username'];
	$password = $_POST['password'];

	$authentication = new Authentication($username,$password);

	$authentication->authenticate();
	

?>