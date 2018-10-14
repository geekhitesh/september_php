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


echo "<pre>";

print_r($employeeList);

echo "</pre>";
?>