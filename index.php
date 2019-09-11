<?php
session_start();

   if(isset( $_SESSION['first'])){ $namesession = $_SESSION['first'].' '. $_SESSION['surna'];}
 

 ?>


<!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset( $_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'].'-welcome to our site'; } else{ echo 'welcome to our site';}?></title>

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
				  <li><a class="active" href="index.php" data-hover="Home">Home</a></li>
				  <?php if(!isset($_SESSION['first'])){
						echo '<li><a href="registration.php" data-hover="Registration">Registration</a></li>
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
			<div class="col-md-3 top-nav">
				     <div class="logo">
						<a href="index.php"><h4 style="color:white;" >Hi, <?php if(isset($_SESSION['first'])){ echo $_SESSION['first'].' '. $_SESSION['surna'];} ?> </h4> <q>Find out what you like doing best, and get someone to pay you for doing it.</q></a>
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
		<!--banner-section-->
		<!--<h3 style="text-align: centre;" class="tittle">All POSTS <i class="glyphicon glyphicon-picture"></i></h3>-->
		<?php if(isset($_GET['outcome'])){echo 
		'<div>	
			<h2 style =" display:inline-block; background:black; color:red;">'; echo $_GET['outcome']; echo '</h2>
		</div>';
		}?>
		
		<div class="banner-section" >
		<?php
			include('connect.php');
			
			
			$all_post = mysqli_query($conn,"SELECT * FROM post ORDER BY post_id DESC");
			
			while($post_data = mysqli_fetch_array($all_post)):
			$post_id = $post_data['post_id'];
			$post_name = $post_data['name'];
		
		
		?>

		<div class="banner-section-post" style="margin-bottom: 12px; border:2px solid wheat; border-radius:20px; padding: 1em 1em 1em 1em;">
			<div class="banner">
                 <div  class="callbacks_container">
				 
					<div class="name-profile row">
						<div class="profile-pic col-md-3" style="width:50px; height:50px;" >
							<img style="width:48px;" src="profile_pic/<?php echo $post_data['pro_pic']; ?>" alt="" />
							
						</div>
						<div class="name col-md-10" style="">
							<h5><?php echo $post_data['name']; ?></h5>
							<p style="font-size:10px;"><?php echo $post_data['time']; ?></p>
							<p style="font-size:13px;"><?php echo $post_data['position']; ?> | <?php echo $post_data['location']; ?> | <?php echo $post_data['company']; ?></p>
						
						</div>
						<?php

						if(isset( $_SESSION['first'])){

							if(($namesession == $post_name )){
							
							echo '<div class="delete col-md-1"  >
							
								<p onclick="deletetoggle'; echo $post_data['post_id']; echo '()" class="tittle" style="cursor:pointer; font-size:25px; margin-top:-19px; color:wheat; float:left; padding-top:0px; ">...</p>
								<div id="deltog'; echo $post_data['post_id'];echo '" class="delete-box" style="display:none;">
									<ul style="list-style-type:none; font-size:10px;">
										<li><a href="delete.php?del='; echo $post_id; echo '">delete</a></li>
										<li><a href="#">others</a></li>
										
									
									</ul>
								
								</div>
								<script type="text/javascript">
								function deletetoggle'; echo $post_data['post_id'];echo '() {
									var x = document.getElementById("deltog'; echo $post_data['post_id'];echo '");
									if (x.style.display === "block") {
										x.style.display = "none";
									} else {
										x.style.display = "block";
									}
								}
								</script>
							</div>';
							}
						}
						?>

					</div>
					<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
					<div class="preface" style=" border: 1px black; padding: 5px;background: whitesmoke;font-size: 14px;"}>
						<p><?php echo $post_data['preface']; ?></p>
					</div>
					
					<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
					
					
					<?php
					
						$qa = mysqli_query($conn,"SELECT * FROM qa WHERE post_number ='$post_id' ORDER BY qa_no ASC");
						
						while($q_a = mysqli_fetch_array($qa)):

						$q_comment_id = $q_a['qa_no'];
					?>

					
					<div class="question-answer" style="padding-left:5px;margin-bottom:5px; width:97%; margin-left:2%;border:1px solid wheat; border-radius:5px;">
						<div class="question">
							<p> <b> VO: </b><?php echo $q_a['question']; ?></p>
						</div>
						<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 0px 0px 0px 0px;" />
						<div class="answer">
						
							<p> <b> ME: </b><?php echo $q_a['answer']; ?></p>
							<i onclick="myFunction<?php echo $q_a['qa_no']; ?>()"  style=" cursor:pointer; position:relative; left:643px;" class="glyphicon glyphicon-comment"></i>
						</div>
						<div class="q-comment" style="display:none;"  id="myDIV<?php echo $q_a['qa_no']; ?>">
						
						<?php
						
						
						$all_comm = mysqli_query($conn,"SELECT * FROM question_commnet WHERE question_id='$q_comment_id' ORDER BY comment_id DESC");
						
						
						while($comm_info = mysqli_fetch_array($all_comm)): ?>
							<div class="q-comment-profile row" style=" font-size: 13px; border: 1px solid whitesmoke; border-radius: 12px;">
								<div class="q-comment-profile-pic col-md-1">
									<img style="width:40px; border-radius:20px;" src="profile_pic/<?php echo $comm_info['pro_pic']; ?>" alt="" />
								</div>
								<div class="q-comment-text col-md-11">
									<div><p><b><?php echo $comm_info['name']; ?>:</b><?php echo $comm_info['comment_text']; ?></p></div>
								</div>
								
							</div>
							<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
						<?php endwhile; ?>
							<?php if(isset( $_SESSION['first'])){
							 echo '<div class="q-comment-input row" style="padding-bottom: 8px;" >
								<div class="col-md-1"></div>
								<form action="question_comment.php" method="POST">
								<div class="q-comment-profile-pic col-md-1" style="margin-right:-25px;">
									<img style="width:32px; border-radius:16px;" src="profile_pic/'; echo $_SESSION['image']; echo '" alt="" />
								</div>
								<div class="col-md-9">
									<input name="usercomment" type="text" style="width:100%; margin:0px;" class="form-control" />
									<input type="hidden" name="postid" value="'; echo $q_a['qa_no']; echo '" />
								</div>
								<div class="col-md-1" style="margin-left:-29px;">
									<input type="submit" name="submit" value="submit" class="btn btn-primary" placeholder="write your comment" />
								</div>
								</form>
							
							</div>'; }?>
						</div>
						
						<script type="text/javascript">
							function myFunction<?php echo $q_a['qa_no']; ?>() {
								var x = document.getElementById("myDIV<?php echo $q_a['qa_no']; ?>");
								if (x.style.display === "block") {
									x.style.display = "none";
								} else {
									x.style.display = "block";
								}
							}
						</script>
					</div>
					<?php endwhile; ?>
					<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
					<div class="comment"> 
					
					<?php
						
						$all_comm = mysqli_query($conn,"SELECT * FROM post_comment WHERE post_no='$post_id' ORDER BY comment_id DESC");
						
						while($comm_data = mysqli_fetch_array($all_comm)): 
						
						?>

					
						<div class="comment-profile row" style=" font-size: 15px; border: 1px solid whitesmoke; border-radius: 12px;">
							<div class="comment-profile-pic col-md-1">
								<img style="width:48px; border-radius:24px;" src="profile_pic/<?php echo $comm_data['pro_pic']; ?>" alt="" />
							</div>
							<div class="comment-text col-md-11">
								<div><p><b><?php echo $comm_data['name']; ?>:</b><?php echo $comm_data['comment_text']; ?></p></div>
							</div>
							
						</div>
						<hr class="preface-hr" style="border-top: 1px solid #f5deb3; margin: 10px 0px 10px 0px;" />
						<?php endwhile; ?>
						<?php if(isset( $_SESSION['first'])){
						echo '<div class="comment-input row">
						<form action="post_comment.php" method="POST">
							<div class="col-md-1"></div>
							<div class="comment-profile-pic col-md-1" style="margin-right:-25px;">
								<img style="width:36px; border-radius:18px;" src="profile_pic/'; echo $_SESSION['image']; echo '" alt="" />
							</div>
							<div class="col-md-9">
								<input type="text" name="usercomment" style="width:100%; margin:0px;" class="form-control" />
								<input type="hidden" name="postid" value="'; echo $post_id; echo '" />
							</div>
							<div class="col-md-1" style="margin-left:-29px;">
								<input type="submit" name="submit" value="submit" class="btn btn-primary" placeholder="write your comment" />
							</div>
							</form>
						</div>'; } ?>
					</div>
				</div>
				<div class="clearfix"> </div>
			 </div>
			 
			<hr class="post-end-hr" style="border-top:10px solid #fffff; margin: 0px 0px 0px 0px;" /> 
		</div>
		
		<?php endwhile; ?>
		</div>
			<!--//banner-section-->
	<div class="banner-right-text">
			 <h3 class="tittle">write a post <i class="glyphicon glyphicon-edit"></i></h3>
			 <div class="text" style="border:1px solid #f5deb3; border-radius:5px; padding:5px; margin-bottom:10px; margin-top:0px;">
				<p>Please write preface before you share your job experiences.you can write about the context,situation,good side about the job etc in the preface. thank you!</p>
			 
			 </div>
			<!--/general-news-->
			 <div class="general-news">
				<div class="general-inner">
					
					 <div class="edit-pics">
					<form method="post" action="submit.php">
				
				
				
					<div class="form-group">

						<div class="input-group">
						  <div class="input-group-addon" style="background: #d4e6f1 ;">Preface</div>
						  <textarea placeholder="please explain the situation here" class="form-control" name="preface" id=""  rows="1"></textarea>
						</div>
						<div class="form-group">
							<div class="" style="">
								<div class="input-group " style="margin:10px 10px 4px 0px;" >
								  <div class="input-group-addon" style="background: #d4e6f1 ;">position</div>
								  <input type="text" placeholder="postion" class="form-control" name="position" />
								</div>
								
								<div class="input-group" style="margin:10px 10px 4px 5px;" >
								  <div class="input-group-addon" style="background: #d4e6f1 ;">location</div>
								  <input type="text" placeholder="location" class="form-control" name="location" />
								</div>
								
								<div class="input-group" style="margin:10px 10px 4px 5px;" >
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

				 </div>
				 </div>
			</div>	
			<!--//general-news-->
			<!--/news-->
			<!--/news-->
	</div>
			<div class="clearfix"> </div>
	<!--/footer-->
	     
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

</body>
</html>