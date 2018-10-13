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


$size = count($numbers);

echo "Size of array is: $size";

echo "<br/>Value at location 129th :".$numbers[129];
echo "<br/>Value at location 130th :".$numbers[130];
//echo "<br/>Value at location 131st :".$numbers[131];

?>