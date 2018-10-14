<?php

// personal details, current company details, past company details, 

$employee = array('name'    =>   'Pankaj',
                  'age'     =>    21,
				  'city'    =>   'Noida',
				  'pincode' =>   201304);

$employee['company_name'] = 'IBM';				  
$employee['company_address'] = 'Sector 63';	
$employee['company_city'] = 'Noida Extension';	


$employee['past_company_name'] = 'TCS';				  
$employee['past_company_address'] = 'Kormangla';	
$employee['past_company_city'] = 'Bangalore';	

$employee['past_company_name2'] = 'Infosys';				  
$employee['past_company_address2'] = 'Electronic City';	
$employee['past_company_city2'] = 'Bangalore';	

print_r($employee);

foreach ($employee as $key => $value) 
{
	echo "<br/><b>Key => </b> $key  <b>value => </b> $value<br/>";
}


?>