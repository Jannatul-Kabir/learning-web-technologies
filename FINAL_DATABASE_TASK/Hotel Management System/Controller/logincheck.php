<?php 
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if($username != ""){
			if($password != ""){
				
				/*$myfile = fopen('../Model/user.txt', 'r');
				//$data = fread($myfile, filesize('user.txt'));
				//fgets($myfile);
				//feof($myfile);
				
				while(!feof($myfile)){
					
					$data = fgets($myfile);
					$user = explode('|', $data);		
					
					if($username == trim($user[0]) && $password == trim($user[1])){
						setcookie('flag', 'true', time()+3600, '/');
						header('location:../Views/home.php');
					}
				}*/

				$con = mysqli_connect('localhost','root','','web_tech');
				$sql = "select * from log_in where username = '{$username}' and password = '{$password}'";
				$result = mysqli_query($con, $sql);

                $data = mysqli_fetch_assoc($result);

                print_r($data);



                if($username == $data['username'] && $password == $data['password']){

                    setcookie('flag', 'true', time()+3600, '/');

                    header('location: ../Views/home.php');

                }

                else{

                    header('location:../Views/login.html');

                }



                //echo "invalid username/password";



            }else{

                echo "invalid password....";

            }

        }else{

            echo "invalid username....";

        }

    }

?>