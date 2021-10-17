<?php

	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['Email'];
		if($email != "")
		{
			echo $email;
		}
		else
		{
			echo "Invalid input. <br/><br/> Input format: <br/> A. Cannot be empty <br/> B. Must be a valid email address (i.e anything@example.com)<br/><br/>";
		}
	}

?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post">
		<b>EMAIL:<b> <br> <input type="email" name="Email" value=""> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>