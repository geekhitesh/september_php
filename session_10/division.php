<?php

function divide($num1,$num2) {
	
	/*if($num2 ==0)
	{
		return "very large number";
	}*/
	
	if($num2==0)
	{
		throw new Exception("Denominator should not be zero");
	}
	
	$result = $num1/$num2;
	
	return $result;
	
}

?>