<?php

$employee = array();

$personal_details = array();
//$permanent_address = array();
$current_company_details = array();
$past_company_details = array();


$personal_details['name'] = 'Pankaj';
$personal_details['age'] = 21;
$personal_details['city'] = 'Noida';


$current_company_details['name'] = 'IBM';
$current_company_details['location'] = 'A14 - Sector 63';
$current_company_details['city'] = 'Noida';

$past_company_details['name'] = 'Wipro';
$past_company_details['location'] = 'Electronic City';
$past_company_details['city'] = 'Bengaluru';


$employee['personal'] = $personal_details;
$employee['current_company'] = $current_company_details;
$employee['past_company'] = $past_company_details;



echo "<pre>";
print_r($employee);
echo "</pre>";


echo "<br/>Past company name: ".$employee['past_company']['name'];

?>