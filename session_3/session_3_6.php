<?php

$user_in_db = "hitesh";
$password_in_db = "123#123";

$input_user = $_POST['user'];
$input_pass = $_POST['pass'];

if($input_user == $user_in_db 
   && $input_pass == $password_in_db)
   {
	   
	   echo "Login Successful.";
   }
   else
   {
	   echo "Invalid User and password.";
   }


?>