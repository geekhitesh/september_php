<?php

include("division.php");
include("log_error.php");

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

try {
	$result = divide($num1,$num2);
	echo "Division is: $result";
}
catch(Exception $ex){
	$error = date("Y-m-d h:i:sa");
	$error .=  ": Some Exception occurred:</b>".
			$ex->getMessage().
			"at line no:".$ex->getLine().
			"in file:".$ex->getFile()."\n";		
	logError($error);	
			
	echo "<b>Exception Occurred:</b>".$ex->getMessage();		
}






?>