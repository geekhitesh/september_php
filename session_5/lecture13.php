<html>

<script>

function showEmployees() {
	
	var employeeList = document.getElementById('employee_list').innerHTML;
	var employeeListJSON = JSON.parse(employeeList); 
	var company_name_list = "";
	
	for(var i=0; i< employeeListJSON.length; i++)
	{
		//console.log(employeeListJSON[i]);
		var employee = employeeListJSON[i];
		
		//console.log(employee['current_company']['name']);
		company_name_list += employee['current_company']['name'] + "<br/>";
	}
	
	document.getElementById('show_employee_list').innerHTML = company_name_list;
}

</script>



<input type='button' value='show employees' onClick='showEmployees();'>

<br/> <br/>
<div id='show_employee_list'>Employee List</div>


</html>





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



// json_encode - converts any array to json

$employeeListJSON = json_encode($employeeList);

echo "<div id='employee_list' style='display:none;'>$employeeListJSON</div>";


?>
