<?php
  session_start();
  
  include('connect.php');
  
	if(isset($_GET['del'])){
		
		$delpostID = $_GET['del'];
		
	  
		mysqli_query($conn,"DELETE FROM post WHERE post_id = '$delpostID'");
		
		
		header('location: index.php');
  
	}

?>