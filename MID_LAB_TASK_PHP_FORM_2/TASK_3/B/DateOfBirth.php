<?php

	if(isset($_REQUEST['submit']))
	{
		$DOB = $_REQUEST['dob'];
		if($DOB != "")
		{
			echo $DOB;
		}
	}
?>
<html>
<head>
	<title>DOB</title>
</head>
<body>
	<form method="post">
		<b>DATE OF BIRTH:<b> <br> <input type="date" name="dob" value=""> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>