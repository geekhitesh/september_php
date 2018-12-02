<?php


class User {
	
	private $conn;
	
	public function __construct($conn) {
		
		$this->conn = $conn;
		
	}
	
	public function get($user_id) {
		
		$query = "select id,name,city,profile_pic from users where id='$user_id'";
		
		$result = $this->conn->query($query);
		
		if($result->num_rows==1)
		{
			$row = mysqli_fetch_assoc($result);
			
			return $row;
		}
		
		
		return "No data found";
	}
	
	public function create() {
		
	}
	
	public function expire() {
		
	}
	
	public function update() {
		
	}
	
	public function tutorials($id) {
		
		$tutorials = array();
		
		$query="select t_id from user_tutorial where u_id='$id'";
		
		$result = $this->conn->query($query);
		
		while($row=mysqli_fetch_assoc($result)) {
			array_push($tutorials,$row);
		}
		
		return $tutorials;
	}
	
}


?>