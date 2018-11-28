<?php


function logError($message) {
	$myfile = fopen("error.log", "a") or die("Unable to open file!");
	fwrite($myfile, $message);
	fclose($myfile);
}

?>