<?php

session_start();

if(isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: http://localhost/september_php/session_8/authentication/login.php");
}


?>