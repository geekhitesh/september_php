<?php

// print sum of all numbers in array

$numbers = array(); // way to create an array

// assign dynamically values to each index of array

for($counter=0; $counter < 100; $counter++)
{
	$numbers[$counter] = $counter*3;
}

//0......99 = 100;

$numbers[130] = 130;

$numbers[140] = 130;

$numbers[190] = 130;
//echo $numbers[130];
//echo $numbers[131];

if(isset($numbers[131]))
{
	//echo $numbers[131];
}
else 
{
	//echo "Location 131 is not present";
}

for($counter=0; $counter<300;$counter++)
{
	
	if(isset($numbers[$counter]))
	{
		echo $numbers[$counter]."<br/>";
	}
	else
	{
		echo "No value at $counter location<br/>";
	}
}

?>