<?php

// Marks >=75 -> A Grade, Marks >=60 and less than 75, B Grade , less than 60 - C Grade

$marks = 78;


if($marks >=60 && $marks <=75)
{
	echo "Grade: B";
}
else if ($marks >=75 && $marks <=100)
{
	echo "Grade: A";
}
else if($marks <60 && $marks >=0)
{
	echo "Grade: C";
}
else 
{
	echo "Bad Data!!";
}

?>

