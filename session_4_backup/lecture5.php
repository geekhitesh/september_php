<?php

	echo "<h1>Grade Calculator - POST</h1>";
	
	// if-elseif-else ladder


	/*
	totalMarks >= 700, then grade A
	totalMarks >= 600, then grade B
	totalMarks >= 400, then Grade C
	totalMarks >= 900, then Grade A+

	*/

	$maximumMarks = 1000;
	$minimumMarks = 0;

	//$totalMarks=200;

	$totalMarks = $_POST['total_marks'];

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
	else if($totalMarks >= $minimumMarks && $totalMarks <400)
	{
		$grade = "Fail";
	}
	else if($totalMarks< $minimumMarks)
	{
		$grade = "Error: $totalMarks can not be less than $minimumMarks";
	}
	else if($totalMarks > $maximumMarks)
	{
		$grade = "Error: $totalMarks can not be greater than $maximumMarks";
	}
	else
	{
		$grade="Not Defined";
	}


	echo "Student's Grade is: $grade";
?>