<?php 
	//session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
		$estatus   = $_post['estatus'];
		$estatus   = $_post['estatus'];

		if($username != ""){
			if($password != ""){
				if($email !=""){

				$con = mysqli_connect('localhost','root','','web_tech');
				$sql = "insert into log_in values('','{$username}','{$password}','{$email}','user')";

				if( mysqli_query($con, $sql)){header('location:../Views/login.html');}
				else{echo "Wrong input";}
			
				}else{
					echo "invalid email....";
				}
			}else{
				echo "invalid password....";
			}
		}else{
			echo "invalid username....";
		}
	}
?>