<?php



		session_start(); 

		$host_name='localhost';
		$user_name='root';
		$pass='';
		$db_name='job_viva';
		
		$conn=mysqli_connect($host_name,$user_name,$pass,$db_name);
		
		$login_mail = $_POST['email'];
	    $login_pass = $_POST['pass'];
		
		

		
		$user_login = mysqli_query($conn,"SELECT * FROM regi WHERE Email ='$login_mail' AND password='$login_pass'");
		$user_num = mysqli_num_rows($user_login);
		
		$user_data = mysqli_fetch_array($user_login);
		

		
		
		if($user_num == True){
			
			$_SESSION['first'] = $user_data['first_name'];
			$_SESSION['surna'] = $user_data['last_name'];
			$_SESSION['image'] = $user_data['Picture'];
			
			
			
			

	
			
			header('location: index.php?msg=You are logged in.');
			
		}
		else{
			header('location: login.php?results=User ID and password does not match.');
		}


?>