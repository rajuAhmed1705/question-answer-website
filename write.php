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
<script>
			$(document).ready(function(){
			//group add limit
			var maxGroup = 10;
			
			//add more fields group
			$(".addMore").click(function(){
				if($('body').find('.fieldGroup').length < maxGroup){
					var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
					$('body').find('.fieldGroup:last').after(fieldHTML);
				}else{
					alert('Maximum '+maxGroup+' groups are allowed.');
				}
			});
			
			//remove fields group
			$("body").on("click",".remove",function(){ 
				$(this).parents(".fieldGroup").remove();
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
	
						<li><a class="active" href="write.php" data-hover="Write Question">Write Question</a></li>
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
			<div class="col-md-3 top-nav contact">
				     <div class="logo">
						<a href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>The youth need to be enabled to become job generators from job seekers.</q></a>
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
			
			
<!--main body-->
<div class="col-md-9 main">
	 <div class="sign-up-form"">
		<h3 class="tittle">write a post <i class="glyphicon glyphicon-edit"></i></h3>
		<div class="sign-up">
			<div class="text-field" style=" border:1px solid #f5deb3; border-radius:5px; padding-bottom:0px; padding:5px; margin-bottom:10px; margin-top:0px;">
					<p>Please write preface before you share your job experiences.you can write about the context,situation,good side about the job etc in the preface. thank you!</p> 
			 </div>
			<div>
				<form method="post" action="submit.php">
				
				
				
					<div class="form-group">

						<div class="input-group">
						  <div class="input-group-addon" style="background: #d4e6f1 ;">Preface</div>
						  <textarea placeholder="please explain the situation here" class="form-control" name="preface" id=""  rows="1"></textarea>
						</div>
						<div class="form-group">
							<div class="" style="display:inline-flex;">
								<div class="input-group col-md-4" style="margin:10px 10px 4px 0px;" >
								  <div class="input-group-addon" style="background: #d4e6f1 ;">position</div>
								  <input type="text" placeholder="postion" class="form-control" name="position" />
								</div>
								
								<div class="input-group col-md-4" style="margin:10px 10px 4px 5px;" >
								  <div class="input-group-addon" style="background: #d4e6f1 ;">location</div>
								  <input type="text" placeholder="location" class="form-control" name="location" />
								</div>
								
								<div class="input-group col-md-4" style="margin:10px 10px 4px 5px;" >
								  <div class="input-group-addon" style="background: #d4e6f1 ;">company name</div>
								  <input type="text" placeholder="company name" class="form-control" name="company" />
								</div>
							</div>
						</div>
					 </div>
					
								
						<div class="form-group fieldGroup">
							<div class="input-group">
								<input type="text" name="question[]" style="background: #f8f9f9 ; " class="form-control" placeholder="Enter question"/>
								<textarea type="text" name="answer[]" class="form-control" rows="1" placeholder="Enter answer"></textarea>
								<div class="input-group-addon"> 
									<a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> Add</a>
								</div>
							</div>
						</div>
						
						<input type="submit" name="submit" class="btn btn-primary" value="SUBMIT"/>
						
				</form>
				<div class="clearfix"> </div>
			</div>

				<!-- copy of input fields group -->
			<div class="form-group fieldGroupCopy" style="display: none;">
					<div class="input-group">
						<input type="text" name="question[]" style="background: #f8f9f9 ;" class="form-control" placeholder="Enter question"/>
						<textarea type="text" name="answer[]" class="form-control" rows="1" placeholder="Enter answer"></textarea>
						<div class="input-group-addon"> 
							<a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Remove</a>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>	
			<div class="clearfix"> </div>
		</div>	
		<div class="clearfix"> </div>
				
	</div>
</div>		
			
			
			
			
			
			
			
<!-- contact -->
	<div class="col-md-9 main">
	 <div class="contact">

		<div class="clearfix"> </div>

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