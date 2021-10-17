<?php

	if(isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['Name'];

		if( ($name != "") && (str_word_count($name) >= 2) && ((ord($name) >=65 && ord($name) <=90) || (ord($name) >=97 && ord($name) <=122)) )
		{
			echo $name;
		}
		else
		{
			echo "Invalid input. <br/><br/> Input format: <br/> A. Cannot be empty <br/> B. Contains at least two words <br/> C. Must start with a letter <br/> D. Can contain a-z, A-Z, period, dash only<br/><br/>";
		}
	}
?>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post">
		<b>NAME:<b> <br> <input type="text" name="myname" value=""/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>