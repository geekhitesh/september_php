<?php

include('lecture6.php');


$emp1 = getEmployeeDetails();


$employeeList = array();

$employeeList[0] = getEmployeeDetails();
$employeeList[1] = getEmployeeDetails();
$employeeList[2] = getEmployeeDetails();
$employeeList[3] = getEmployeeDetails();
$employeeList[4] = getEmployeeDetails();
$employeeList[5] = getEmployeeDetails();


/* show the current company's city of 4th employee */


$city = $employeeList[3]['current_company']['city'];

echo "4th Employee's Current city: ".$city;


?>