<?php

include('lecture6.php');


$emp = getEmployeeDetails();

//echo "<br/> Employee's permanent city: ".$emp['personal']['city'];
echo "<br/>Past company name: ".$emp['past_company']['name'];

?>