<?php

// Marks >=75 -> A Grade, Marks >=60 and less than 75, B Grade , less than 60 - C Grade

$marks = 70;


if($marks >=60 && $marks <=75)

{
	echo "Grade: B";
}
else if ($marks >=75)
{
	echo "Grade: A";
}
else
{
	echo "Grade: C";
}

?>

