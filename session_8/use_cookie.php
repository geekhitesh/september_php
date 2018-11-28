<?php

if(isset($_COOKIE['language']))
{
	$preferred_language = $_COOKIE['language'];
	echo "Prefered Langugage is:".$preferred_language;
}
else
{
	echo "Prefered Langugage is:Marathi";
}


?>