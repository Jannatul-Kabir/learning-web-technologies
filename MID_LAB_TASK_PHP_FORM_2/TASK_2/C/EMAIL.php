<?php

	if(isset($_REQUEST['submit']))
  {
		$Email = $_REQUEST['MyEmail'];
	}
?>


<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post" >
		<b>Email:<b> <br> <input type="Email" name="MyEmail" value="<?php if(isset($Email)){ echo $Email; }?>"/> <br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>