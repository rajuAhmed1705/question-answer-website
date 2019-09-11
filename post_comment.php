<?php 



	session_start();
	
	
	include('connect.php');
	
	$username = $_SESSION['first'].' '. $_SESSION['surna'];
	
	$user_pic = $_SESSION['image'];
	
	$comment = $_POST['usercomment'];
	
	$post_id = $_POST['postid'];
	
if(isset($_POST['submit'])){
	if($comment){
		
		mysqli_query($conn,"INSERT INTO post_comment(name,pro_pic,comment_text,post_no) VALUES('$username','$user_pic','$comment','$post_id')");
		
		header('location: index.php');
		
	}else{
		
		header('location: index.php');
		
		
	}
}