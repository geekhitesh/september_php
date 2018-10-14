<?php


function getEmployeeDetails() 
{
	$employee = array();

	$personal_details = array();
	$permanent_address = array();
	$current_company_details = array();
	$past_company_details = array();

	$permanent_address['house_no'] = 21;
	$permanent_address['street_no'] = 'XYZ';
	$permanent_address['sector'] = 'Noida Sector 110';
	$permanent_address['city'] = 'Noida';
	
	$personal_details['name'] = 'Pankaj';
	$personal_details['age'] = 21;
	$personal_details['permanent_address'] = $permanent_address;
	
	


	$current_company_details['name'] = 'IBM';
	$current_company_details['location'] = 'A14 - Sector 63';
	$current_company_details['city'] = 'Noida';

	$past_company_details['name'] = 'Wipro';
	$past_company_details['location'] = 'Electronic City';
	$past_company_details['city'] = 'Bengaluru';


	$employee['personal'] = $personal_details;
	$employee['current_company'] = $current_company_details;
	$employee['past_company'] = $past_company_details;


	$personal_details_array = array();

	$personal_details_array = $employee['personal'];

	return $employee;
	
}

?>