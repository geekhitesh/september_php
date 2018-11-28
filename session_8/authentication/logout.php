<?php

//echo session_name();
session_start();
var_dump($_SESSION);
if(isset($_SESSION['username']))
{
	
	$_SESSION = array();
	session_destroy(); 
	header("Location: http://localhost/september_php/session_8/");
}


?>