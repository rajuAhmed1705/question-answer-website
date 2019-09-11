<?php

	session_start();
	if(isset($_POST['btn'])){
		require_once'./name.php';
		
		$obj_regi = new regi();
		$obj_regi::registration($_POST,$_FILES);
		
		$obj_profile = new regi();
		$obj_profile::profileUp($_FILES);
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
						echo '<li><a class="active" href="registration.php" data-hover="Registration">Registration</a></li>
						<li><a href="login.php" data-hover="Login">Login</a></li>';
				  }
				  else 
					  echo '<li><a href="myposts.php" data-hover="my posts">my posts</a></li>';
					?>
	
						<li><a  href="write.php" data-hover="Write Question">Write Question</a></li>
						<li><a href="contact.php" data-hover="CONTACT">Contact</a></li>
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
			<div class="col-md-3 top-nav register">
				     <div class="logo">
						<a href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>Starting a new job can be nerve-racking , but it's also exciting. You're embarking on a new future, positioning yourself to write a fresh story on a clean slate.</q></a>
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
	<!-- register -->
			<div class="sign-up-form">
			
			
			
				 <h3 class="tittle">Registration <i class="glyphicon glyphicon-file"></i></h3>
					<p>register to share the experiences of job viva</p>
				<div class="sign-up">
				
					<div>
			
						<h2 style =" display:inline-block; background:black; color:red;"><?php if(isset($_GET['results'])){echo $_GET['results'];}?></h2>
					</div>
					 <h3 class="tittle reg">Personal Information <i class="glyphicon glyphicon-user"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="a">First Name* :</h4>
						</div>
						<form action="" method="POST" enctype="multipart/form-data" >
						<div class="sign-up2">
							
								<input placeholder="enter your first name" type="text" class="text" value="" name ="fname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">

						
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Last Name* :</h4>
						</div>
						<div class="sign-up2">
							
									<input placeholder="enter your last name" type="text" class="text" value="" name ="lname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Company Name* :</h4>
						</div>
						<div class="sign-up2">
							
									<input placeholder="enter the name of the company you're working for currently" type="text" class="text" value="" name ="Cname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'company name';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Position* :</h4>
						</div>
						<div class="sign-up2">
							
									<input placeholder="designation" type="text" class="text" value="" name ="Position" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Position';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Educational Institute* :</h4>
						</div>
						<div class="sign-up2">
							
									<input placeholder="Educational Institute" type="text" class="text" value="" name ="Institute" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Educational Institute';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Educational background* :</h4>
						</div>
						<div class="sign-up2">
							
									<input placeholder="educational background" type="text" class="text" value="" name ="background" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Educational background';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="c">Email Address* :</h4>
						</div>
						<div class="sign-up2">
							
								 <input placeholder="enter a valid email ID" type="text" class="text" value="" name ="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Gender* :</h4>
						</div>
						<div class="sign-up2" style="padding-top:15px; display : inline-block; " >
							
							<select name="gender" id="">
								<option value="">Select Your Gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>

							
						</div>
						<div class="clearfix"> </div>
					</div><div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Date of Birth* :</h4>
						</div>
						<div class="sign-up2">
							
									<div class="bbb-option" style="padding-top:15px;"> 
							<select name="day" id="">
								<option value="">Day</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select name="month" id="">
								<option value="">Month</option>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<select name="year" id="">
								<option value="">Year</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
							</select>
						</div>

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="b">Profile Picture* :</h4>
						</div>
						<div class="sign-up2">
							
									<input style="padding-top:15px;" type="file" class="text"  name ="picture">

							
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					
					
					 <h3 class="tittle reg">Login Information <i class="glyphicon glyphicon-off"></i></h3>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="d">Password* :</h4>
						</div>
						<div class="sign-up2">
							
							<input placeholder="password" type="password" class="Password" name ="pass" >

							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4>Confirm Password* :</h4>
						</div>
						<div class="sign-up2">
							
							<input placeholder="re-enter password" type="password" class="Password" name ="cpass">
	

							
						</div>
						<div class="clearfix"> </div>
					</div>
					
						<input style="outline: none; border: none;background: #4A245E; color: #fff; font-size: 18px; width: 17%; font-weight: 600; margin-left: 18em; margin-top: 3em; padding: 13px 0; transition: .5s all; -webkit-transition: .5s all; -moz-transition: .5s all; -o-transition: .5s all; -ms-transition: .5s all; text-transform: uppercase; -webkit-appearance: none; " type="submit" name ="btn" value="Submit">
					</form>
				</div>
			</div>
<!-- //register -->
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