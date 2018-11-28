<?php

$application_url = "http://".$_SERVER['HTTP_HOST']."/september_php/session_8/";

?>

<html>

<head>


</head>

<body>
<hr/>
<a href="<?php echo $application_url.'/authentication/login.php'?>">Login</a>
<a href="">Sign Up</a>
<a href="<?php echo $application_url.'/authentication/home.php'?>">Profile</a>
<a href="<?php echo $application_url.'/authentication/logout.php'?>">Log Out<a>
<hr/>
<br/>
<br/>
<br/>
<br/>
</body>
</html>