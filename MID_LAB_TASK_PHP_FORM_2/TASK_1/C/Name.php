<?php

	if(isset($_REQUEST['submit']))
  {
		$Name = $_REQUEST['Name'];
	}
?>
<html>
<head>
	<title>Name</title>
</head>
<body>
	<form method="post" >
		<b>NAME:<b> <br> <input type="text" name="Name" value="<?php if(isset($Name)){ echo $Name; }?>"/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>