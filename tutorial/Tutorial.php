<?php


class Tutorial {
	
	private $conn;
	
	public function __construct($conn) {
		$this->conn = $conn;
	}
	
	public function get($id) {
		
	}
	
	public function create() {
		
	}
	
	public function expire() {
		
	}
	
	public function update() {
		
	}
	
	public function lectures($tutorial_id) {
		$lectures = array();
		
		$query = "select id,name from lectures where t_id='$tutorial_id'";
		
		$result = $this->conn->query($query);
		
		while($row=mysqli_fetch_assoc($result)) {
			array_push($lectures,$row);
		}
		
		return $lectures;
	}
	
}


?>