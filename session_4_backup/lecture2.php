<?php

// if-elseif-else ladder


/*
totalMarks >= 700, then grade A
totalMarks >= 600, then grade B
totalMarks >= 400, then Grade C
totalMarks >= 900, then Grade A+

*/

$totalMarks=100;


if($totalMarks>=400 && $totalMarks <600)
{
	$grade = "C";
}
else if($totalMarks>=600 && $totalMarks <700)
{
	$grade = "B";
}
else if($totalMarks>=700 && $totalMarks <900)
{
	$grade = "A";
}
else if($totalMarks>=900 && $totalMarks <=1000)
{
	$grade = "A+";
}
else
{
	$grade="Not Defined";
}


echo "Student's Grade is: $grade";

?>