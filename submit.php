<?php
 session_start();
 
 
 
	$host_name='localhost';
	$user_name='root';
	$pass='';
	$db_name='job_viva';


	$conn=mysqli_connect($host_name,$user_name,$pass,$db_name);
	
	if(!$conn){
			die('connection failed'.mysqli_error($conn));
		}
	
	


if(isset($_POST['submit'])){
    $questionArr = $_POST['question'];
    $answerArr = $_POST['answer'];
	
	$username = $_SESSION['first'].' '. $_SESSION['surna'];
	$user_pic = $_SESSION['image'];
	$postdate = date('F d, Y ');
	$preface = $_POST['preface'];
	$position = $_POST['position'];
	$location = $_POST['location'];
	$company = $_POST['company'];
	
	if($preface And $username And $user_pic ){
		
		if(!empty($questionArr)){
			
			mysqli_query($conn,"INSERT INTO post(name,pro_pic,time,preface,position,location,company) VALUES('$username','$user_pic','$postdate','$preface','$position','$location','$company')");
			
			$user_post_id = mysqli_query($conn,"SELECT * FROM post WHERE preface ='$preface'");
			
			$user_piece = mysqli_fetch_array($user_post_id);
			
			$post_id = $user_piece['post_id'];
		
		
			for($i = 0; $i < count($questionArr); $i++){
				if(!empty($questionArr[$i])){
					$question = $questionArr[$i];
					$answer = $answerArr[$i];
					
					//database insert query goes here
					//echo '<pre>';
					//print_r($questionArr);
					//print_r($answerArr);
					
					//echo '</pre>';
					
					mysqli_query($conn,"INSERT INTO qa(post_number,question,answer) VALUES('$post_id','$question','$answer')");
					
					header('location: index.php');
				}
            }
			header('location: index.php');
        }
		else
			header('location: index.php');
    }
	else
		header('location: index.php');
		
	

}
?>