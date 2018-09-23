<?php

//http://localhost/september_php/session_3_4.php?num1=21&submit=check

$number1 = $_GET["num1"];
$number2 = $_GET["num2"];

//echo $number1;
//echo "<br/>".$number2;


$sum = $number1 + $number2;

echo "Sum is: $sum";

?>