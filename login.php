<?php

	session_start(); 

	if(isset($_POST['btn'])){
		require_once'./loginPage.php';
		
		if(!isset($_SESSION['first'])){
	
		header('location: login.php?login=You must login first.');
		}
		
		
	}
	
	
		
	
	

	
	


?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset( $_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna']; } else{ echo 'welcome to our site';}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:700,700italic,800,300,300italic,400italic,400,600,600italic' rel='stylesheet' type='text/css'>

<!--Custom-Theme-files-->
	<link href="css/style.css" rel='stylesheet' type='text/css' />	
	<script src="js/jquery.min.js"> </script>
	
<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>

</head>
<body>
	<!-- header-section-starts -->
      <div class="h-top" id="home">
		   <div class="top-header">
				  <ul class="cl-effect-16 top-nag">
				  <li><a href="index.php" data-hover="Home">Home</a></li>
				  <?php if(!isset($_SESSION['first'])){
						echo '<li><a href="registration.php" data-hover="Registration">Registration</a></li>
						<li><a class="active" href="login.php" data-hover="Login">Login</a></li>';
				  }
				  else 
					  echo '<li><a href="myposts.php" data-hover="my posts">my posts</a></li>';
					?>
	
						<li><a href="write.php" data-hover="Write Question">Write Question</a></li>
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a href="about.php" data-hover="About">About</a></li>
					</ul>
					<?php if(isset($_SESSION['first'])){
						 echo '<div class="search-box">
							<div class="profile" style="width:25%; height:20px; position:relative; float:right;" >
										<a  href="logout/logout.php"><img class="rounded-top" style="height:35px;" src="profile_pic/'. $_SESSION['image']. '" alt="" /><p style="color:white; font-size:10px;">Log out</p></a>
									</div>
							</div>';}
						
					?>

					<div class="clearfix"></div>
				</div>
       </div>
	<div class="full">
			<div class="col-md-3 top-nav login">
				     <div class="logo">
						<a href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>Choose a job you love, and you will never have to work a day in your life.</q></a>
					</div>
					<div class="top-menu">
					 <span class="menu"> </span>

					<ul class="cl-effect-16">
						<li><a href="index.php" data-hover="HOME">Home</a></li> 
						<li><a  href="about.php" data-hover="About">About</a></li>
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
					</ul>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav --> 	
					<ul class="side-icons">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
			    </div>
			</div>
	<div class="col-md-9 main">
	<!-- login-page -->
	<div class="login">
		<div class="login-grids">
			<div class="col-md-6 log">
			
			
			<div>
			
				<h2 style =" display:inline-block; background:black; color:red;"><?php if(isset($_GET['login'])){echo $_GET['login'];}?></h2>
			</div>
					 <h3 class="tittle">Login <i class="glyphicon glyphicon-lock"></i></h3>
					 <div>
			
						<h2 style =" display:inline-block; background:black; color:red;"><?php if(isset($_GET['results'])){echo $_GET['results'];}?></h2>
					</div>
					 <p>Welcome, please enter the following to continue.</p>
					 <p>If you have previously Login with us, <a href="#">click here</a></p>
					 <form action="" method="POST" > 
						 <h5>User email:</h5>	
						 <input name="email" type="text" placeholder="enter email" value="">
						 <h5>Password:</h5>
						 <input name="pass" type="password" placeholder="enter password" value="">					
						 <input name="btn" type="submit" value="Login">
						  
					 </form>
					<a href="#">Forgot Password ?</a>
			</div>
			<div class="col-md-6 login-right">
					 <h3 class="tittle">New Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>By creating an account with our website, you will be able to share your viva experiences with others and can read others experiences easily.</p>
					<a href="registration.php" class="hvr-bounce-to-bottom button">Create An Account</a>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //login-page -->
			<div class="clearfix"> </div>
	<!--/footer-->
	     <div class="footer">
				 <div class="footer-top">
				    <div class="col-md-4 footer-grid">
					     <h4>Acknowledgemanet </h4>
				          <ul class="bottom">
							 <li>This is a Student project</li>
							 <li>Some feactures might not work property</li>
							 <li>In any issue please inform the developer</li>
						 </ul>
				    </div>
					  <div class="col-md-4 footer-grid">
					     <h4>Message Us Now</h4>
				            <ul class="bottom">
						     <li><i class="glyphicon glyphicon-home"></i>Available 24/7 </li>
							 <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:drakib@hotmail.com">drakib@hotmail.com</a></li>
						   </ul>
				    </div>
					<div class="col-md-4 footer-grid">
					     <h4>Address Location</h4>
				           <ul class="bottom">
						     <li><i class="glyphicon glyphicon-map-marker"></i>15 no gate,Cumilla Cantonment,Cumilla </li>
							 <li><i class="glyphicon glyphicon-earphone"></i>phone: (+880) 1771-522-411 </li>
						   </ul>
				    </div>
					<div class="clearfix"> </div>
				 </div>
	     </div>
		<div class="copy">
		    <p>&copy; All Rights Reserved | Developed by <a href="https://www.facebook.com/DiamantineRakib">Raju Ahmed</a> </p>
		</div>
	 <div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
</div>	
		<!--//footer-->
			<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>
</html>