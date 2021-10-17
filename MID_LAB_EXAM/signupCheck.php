<?php 
	//session_start();
	if(isset($_POST['submit'])){
		$Username 	= $_POST['Username'];
		$password 	= $_POST['password'];

		if($Username != ""){
			if($password != ""){

					/*$_SESSION['Username'] = $Username;
					$_SESSION['password'] = $password;
					/*setcookie('Username', $Username, time()+3600, '/');
					setcookie('password', $password, time()+3600, '/');
					
					/*$myfile = fopen('user.txt', 'w');
					$myuser = $Username."|".$password."|".$email;
					fwrite($myfile, $myuser);
					fclose($myfile);*/

					$myfile = fopen('user.txt', 'a');
					$myuser = $Username."|".$password."|"."\r\n";
					fwrite($myfile, $myuser);
					fclose($myfile);

					header('location: login.html');
				
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>