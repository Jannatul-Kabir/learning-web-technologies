<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['Username'];
		$password 	= $_POST['Password'];

		if($username != ""){
			if($password != ""){
				
				$myfile = fopen('user.txt', 'r');
				//$data = fread($myfile, filesize('user.txt'));
				//fgets($myfile);
				//feof($myfile);
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location: home.php');
					}
				}
				echo "invalid username/password";
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>