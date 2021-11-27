<html>
<head>
	<title>Create New User Page</title>
</head>
<body>
	
	<form method="post" action="signupCheck.php">
		<fieldset>
			<legend><h1><font face="Algerian" size="10" color="green">Create New</font></h1></legend>
			<table width="600" bordercolor="green" border="4" cellspacing="4" cellpadding="6">
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Emplyment Status</td>
					<td>
					  <input type="radio" name="estatus" value="employed" />Employed
					  <input type="radio" name="estatus" value="Unemployed" />Unemployed
					</td>
				  </tr>
				<tr>
					<td>
						Please press Submit 
					</td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<center>
		<a href="home.php"><font face="Satisfy" size ="5" color="Black">Back</font> </a>&nbsp;  || 
		<a href="logout.php"><font face="Satisfy" size ="5" color="Black">&nbsp; Log Out</font> </a>
	</center>
	
</body>
</html>