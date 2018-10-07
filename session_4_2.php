<?php


// print sum of all numbers in array

$numbers = array(); // way to create an array

// assign dynamically values to each index of array

for($counter=0; $counter < 100; $counter++)
{
	$numbers[$counter] = $counter*3;
}


// print an array

// 0 ....99
echo "<pre>";
//var_dump($numbers);
print_r($numbers);
echo "</pre>";

//$sum = $numbers[0]+ $numbers[1] + $numbers[2]+ $numbers[3];

$sum = 0;

// sum of array


for($counter=0; $counter < 100; $counter++)
{
	$sum = $sum + $numbers[$counter];
}

echo "<br/>Sum of Array is: $sum";

?>