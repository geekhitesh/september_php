<?php
	include('DB.php');
	include('User.php');
	
	$db = new DB();
	$conn = $db->connect();
	
	$id = $_GET["user_id"];
	
	$user = new User($conn);
	
	$user_data = $user->get($id);
	
	//$tutorials = $user->tutorials($user_data['id']);
	
	//print_r($tutorials);
	
	//print_r($user_data);

?>

<html>

<h1>Welcome <?php echo $user_data["name"] ?></h1>
<img src="<?php echo $user_data["profile_pic"] ?>" height="200px" width="200px" alt="no-image-found"/>

</html>