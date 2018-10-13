<?php

/*
1. While
2. DoWhile
3. For
4. For Each


*/


$counter =0;
$maxCounterInput = $_GET['counter'];
$maxCounterAllowed = 100;

if($maxCounterInput > $maxCounterAllowed )
{
	echo "Maximum Limit: $maxCounterAllowed";
}
else
{
	echo "<br/>While Loop Started";
	while($counter <$maxCounterInput)
	{
		echo "<br/>Hello World printed for ".($counter+1)." times";
		$counter++;
	}
	echo "<br/>While Loop Ended";

}
?>