<?php 



	session_start();
	
	
	include('connect.php');
	
	$username = $_SESSION['first'].' '. $_SESSION['surna'];
	
	$user_pic = $_SESSION['image'];
	
	$comment = $_POST['usercomment'];
	
	$post_id = $_POST['postid'];
	
if(isset($_POST['submit'])){
	if($comment){
		
		mysqli_query($conn,"INSERT INTO question_commnet(name,pro_pic,comment_text,question_id) VALUES('$username','$user_pic','$comment','$post_id')");
		
		header('location: index.php');
		
	}else{
		
		header('location: index.php');
		
		
	}
}