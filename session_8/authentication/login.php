<?php

include('../header.php');

?>

<html>


<body>

<form method="POST" action="authentication.php">
username:<input type="text" name="username" value="" /><br/>
password:<input type="password" name="password" value="" /><br/>
<input type="submit" value="sign in"/>
</form>
</body>

</html>


<?php

include('../footer.php');

?>