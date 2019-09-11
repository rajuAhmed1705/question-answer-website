<?php
	
class regi{
	

	
	
	public function registration($data,$pic){
		$host_name='localhost';
		$user_name='root';
		$pass='';
		$db_name='job_viva';
		
		$password=$data['pass'];
		$repassword=$data['cpass'];
		
		
		$birthday = $data['day'].'/'.$data['month'].'/'.$data['year'];
		$picture_name= $pic['picture']['name'];
		
		$conn=mysqli_connect($host_name,$user_name,$pass,$db_name);
		
		if(!$conn){
			die('connection failed'.mysqli_error($conn));
		}
		
		$user_mail = mysqli_query($conn,"SELECT * FROM regi WHERE Email='$data[email]'");
	
		$email_number =  mysqli_num_rows($user_mail);
		
		//$sql="insert into regi(first_name,last_name,company_name,position,E_Institute,E_background,Email,Gender,Dob,Picture,password) values('$data[fname]','$data[lname]','$data[Cname]','$data[Position]','$data[Institute]','$data[background]','$data[email]','$data[same]','$birthday','$picture_name','$data[pass]')";
		
		
		
		
		
		
		if($data['fname'] && $data['lname'] && $data['Cname'] && $data['Position'] && $data['day'] && $data['month'] && $data['year'] && $data['Institute'] && $data['background'] && $data['email'] && $data['gender']  && $picture_name  && $data['pass'] ){
			if($password == $repassword){
				if($email_number >= 1){
					echo 'the email exists';
				}
				else{
					
					$sql="insert into regi(first_name,last_name,company_name,position,E_Institute,E_background,Email,Gender,Dob,Picture,password) values('$data[fname]','$data[lname]','$data[Cname]','$data[Position]','$data[Institute]','$data[background]','$data[email]','$data[gender]','$birthday','$picture_name','$data[pass]')";
			
					mysqli_query($conn,$sql);
					
					header('location: registration.php?results=Welcome! you are now registered to our website.');
					session_start();
				}
			}
				
			else{
				header('location: registration.php?results=confirm password does not match.');
			}
		}
		else{
			
			header('location: registration.php?results=You must fill all the fields.');
		}
		
		//mysqli_query($conn,$sql);
		//echo '<pre>';
		//print_r($conn);
		
		
		
	}

	public function profileUp($pic){
		
		define('SITE_ROOT',realpath(dirname(_FILE_)));
		move_uploaded_file($pic['picture']['tmp_name'],SITE_ROOT.'/profile_pic/'.$pic['picture']['name']);
	}
	
	
}





