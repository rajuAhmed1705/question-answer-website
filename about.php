<?php
session_start();




 ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset( $_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna']; } else{ echo 'welcome to our site';}?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Blogger Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android  Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
						<li><a href="login.php" data-hover="Login">Login</a></li>';
				  }
				   else 
					  echo '<li><a href="myposts.php" data-hover="my posts">my posts</a></li>';
					?>
	
						<li><a  href="write.php" data-hover="Write Question">Write Question</a></li>
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a class="active" href="about.php" data-hover="About">About</a></li>
					</ul>
					<?php if(isset($_SESSION['first'])){
						 echo '<div class="search-box">
							<div class="profile" style="width:25%; height:20px; position:relative; float:right;" >
										<a  href="logout/logout.php"><img class="rounded-top" style="height:35px;" src="profile_pic/';
						echo $_SESSION['image'];
						
						echo '" alt="" /><p style="color:white; font-size:10px;">Log out</p></a>
									</div>
							</div>';}
						
					?>
					<div class="clearfix"></div>
				</div>
       </div>
	<div class="full">
			<div class="col-md-3 top-nav about">
				     <div class="logo">
						<a style="" href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>One of the very important characteristics of a student is to question. Let the students ask questions.</q></a>
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
		<h3 class="tittle" style="text-align:center; margin:0px; padding-top:15px;">About the developer <i class="glyphicon glyphicon-user"></i></h3>
		<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
		<div class="row" style="margin-bottom:10px;">
			
			<div class="col-md-1"></div>
			<div class="col-md-2 row">
				<div class="col-md-1"></div>
				<div class="pic col-md-2" style="width:140px;"> 
				
					<img style=" float:left; width:100%;" src="profile_pic/1.jpg" alt="" />
				</div>
			</div>
			<div class="about-me col-md-8"> 
				
				<div class="data"> 
					<ul style="list-style-type:none; font-size:20px;">
						<li><p><b>Name:</b>Raju Amhed</p></li>
						<li><p><b>Department:</b>Computer Science and Engineering</p></li>
						<li><p><b>Institute:</b>Bangladesh Army International University of Science & Technology,Cumilla</p></li>
					
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom:10px;">
			
			<div class="col-md-1"></div>
			<div class="col-md-2 row">
				<div class="col-md-1"></div>
				<div class="pic col-md-2" style="width:140px;"> 
				
					<img style=" float:left; width:100%;" src="profile_pic/2.jpg" alt="" />
				</div>
			</div>
			<div class="about-me col-md-8"> 
				
				<div class="data"> 
					<ul style="list-style-type:none; font-size:20px;">
						<li><p><b>Name:</b>Samina Afroze</p></li>
						<li><p><b>Department:</b>Computer Science and Engineering</p></li>
						<li><p><b>Institute:</b>Bangladesh Army International University of Science & Technology,Cumilla</p></li>
					
					</ul>
				</div>
			</div>
		</div>
		<div class="row" style="margin-bottom:10px;">
			
			<div class="col-md-1"></div>
			<div class="col-md-2 row">
				<div class="col-md-1"></div>
				<div class="pic col-md-2" style="width:140px;"> 
				
					<img style=" float:left; width:100%;" src="profile_pic/3.jpg" alt="" />
				</div>
			</div>
			<div class="about-me col-md-8"> 
				
				<div class="data"> 
					<ul style="list-style-type:none; font-size:20px;">
						<li><p><b>Name:</b>Jahedul Alam</p></li>
						<li><p><b>Department:</b>Computer Science and Engineering</p></li>
						<li><p><b>Institute:</b>Bangladesh Army International University of Science & Technology,Cumilla</p></li>
					
					</ul>
				</div>
			</div>
		</div>
		<h3 class="tittle" style="text-align:center; margin:0px; padding-top:15px;">Disclaimer <i class="glyphicon glyphicon-exclamation-sign"></i></h3>
		<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
		<p style="padding:10px;"> This SOFTWARE PRODUCT is provided by THE PROVIDER "as is" and "with all faults." THE PROVIDER makes no representations or warranties of any kind concerning the safety, suitability, lack of viruses, inaccuracies, typographical errors, or other harmful components of this SOFTWARE PRODUCT. There are inherent dangers in the use of any software, and you are solely responsible for determining whether this SOFTWARE PRODUCT is compatible with your equipment and other software installed on your equipment. You are also solely responsible for the protection of your equipment and backup of your data, and THE PROVIDER will not be liable for any damages you may suffer in connection with using, modifying, or distributing this SOFTWARE PRODUCT</p>
		<!--banner-section-->
		
			<!--//banner-section-->
			
			 
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
		
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

 </div>
</body>
</html>