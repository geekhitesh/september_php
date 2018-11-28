<html>

<a href="lecture2.php">home</a>
<a href="lecture3.php">logout</a>


</html>

<?php

$x=$_GET['x'];
if($x==10)
{
	session_start();
	$_SESSION["username"] = "hitesh";
}

?>