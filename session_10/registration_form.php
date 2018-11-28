<html>


<head>

	<script>

		function checkUserAvailability() {
			let username = document.getElementById("username").value;
			let endpoint = "check_user_exists.php?username="+username;
			hideError();
			let xhttp = new XMLHttpRequest();
			
			xhttp.onreadystatechange = function() 
			{
				if (this.readyState == 4 && this.status == 200) 
				{
					let value = this.responseText;
					if(value==1)
					{
						displayError();
					}
				}
			};
			xhttp.open("GET", endpoint, true);
			xhttp.send();
			
		}
		
		function displayError() {
			let errorLabel = document.getElementById("error_message");
			errorLabel.style.display = "block";
		}
		
		function hideError() {
			let errorLabel = document.getElementById("error_message");
			errorLabel.style.display = "none";
		}
	</script>

</head>

<body>

<form>
username:<input type="text" 
                name="username" 
				id="username" 
				value="" 
				onblur="checkUserAvailability();";
		/>
		<label id="error_message" 
			   style="display:none;">
			<b>username already exists</b>
		</label>
<br/>
age:<input type="text" name="age" id="age" value="" /><br/>
city:<input type="text" name="city" id="city" value="" /><br/>
<input type="submit" value="submit form" />
</form>
</body>

</html>