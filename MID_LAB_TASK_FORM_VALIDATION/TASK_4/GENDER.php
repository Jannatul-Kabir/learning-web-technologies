<?php

	if(isset($_REQUEST['submit']))
	{
		if(isset($_REQUEST['Gender']))
		{
			echo $_REQUEST['Gender'];
		}
		else
		{
			echo "At least one of them must be selected <br/><br/>";
		}
	}

?>


<html>
<head>
	<title>Gender</title>
</head>
<body>
	<form method="post">
		<b>Gender:<b> <br>
			<input type="radio" name="Gender" value="Male"> Male
			<input type="radio" name="Gender" value="Female"> Female<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>