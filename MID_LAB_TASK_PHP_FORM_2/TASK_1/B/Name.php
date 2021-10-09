<?php

	if(isset($_REQUEST['submit']))
	{
		$Name = $_REQUEST['Name'];
		if($name != "")
		{
			echo $name;
		}
    }
    ?>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<b>NAME:<b> <br> <input type="text" name="Name" value=""/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>