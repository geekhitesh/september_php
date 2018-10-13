<?php

if(isset($_POST['num1']))
{
	$num1 = $_POST['num1'];
	echo $num1;
}
else
{
	echo "Unable to fetch value of num1. Try Again!!";
}
?>