<?php
session_start();




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
						<li><a href="login.php" data-hover="Login">Login</a></li>';
				  }
				  else 
					  echo '<li><a href="myposts.php" data-hover="my posts">my posts</a></li>';
					?>
	
						<li><a  href="write.php" data-hover="Write Question">Write Question</a></li>
						<li><a class="active" href="contact.php" data-hover="CONTACT">Contact</a></li>
						<li><a href="about.php" data-hover="About">About</a></li>
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
			<div class="col-md-3 top-nav contact">
				     <div class="logo">
						<a href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>TIt is better to debate a question without settling it than to settle a question without debating it.</q></a>
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
<!-- contact -->
	<div class="col-md-9 main">
	 <div class="contact">
	   <h3 class="tittle">Find Us <i class="glyphicon glyphicon-map-marker"></i></h3>
		<div class="contact-left">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14638.159797708853!2d91.1136425!3d23.4770535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f168ba787f7f6d2!2sBangladesh+Army+International+University+of+Science+%26+Technology+(BAIUST)!5e0!3m2!1sen!2sbd!4v1529685766477" ></iframe>

		</div>
		<div class="contact-right">
			<p class="phn">+88 01771 522411</p>
			<p class="phn-bottom">15 No Gate
					<span>Cumilla Cantonment,Cumilla.</span></p>
			<p class="lom">A Student from The Department of Computer Science and Enginnering from Bangladesh Army International University of Science and Technology,Cumilla.</p>
		</div>
		<div class="clearfix"> </div>
		<div class="contact-left1">
			<h3>Contact Us With <span>Any questions</span></h3>
			<div class="in-left">
				<form>
					<p class="your-para">Your Name :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Your Mail :</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
							<p class="your-para">Phone Number:</p>
							<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

				</form>
			</div>
			<div class="in-right">
				<form>
					<textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-right1">
			<h3><span>Social Websites</span></h3>
			<h4>For Further contacts and knowing<label>you can follow us view social media</label></h4>
			<p>We are working to make this website best for your job viva preparation.Any valuable suggestion are warmly accepted. Thanks for choosing us.</p>
			     <ul class=" side-icons con">
							<li><a class="fb" href="#"></a></li>
							<li><a class="twitt" href="#"></a></li>
							<li><a class="goog" href="#"></a></li>
							<li><a class="drib" href="#"></a></li>
					   </ul>
		</div>
		<div class="clearfix"> </div>
<!-- //contact -->
			</div>
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