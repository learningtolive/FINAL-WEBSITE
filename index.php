<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link href="style.css" rel="stylesheet">
<link href="template.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


<body>

<script>
   // script to make the side pannel come out
function openNav() {
  document.getElementById("mySidenav").style.width = "200px";
  document.getElementById("main").style.marginLeft = "0px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>


<div class="login">
	
	<div class="lang">
  <button class="dropbtn">Dropdown</button>
  <div class="lang-content">
  <a href="#"><img src="../img/union-jack.jpg"></a>
  <a href="#"><img src="../img/finland.jpg"></a>
  <a href="#"><img src="../img/ireland.jpg"></a>
  <a href="#"><img src="../img/spain.jpg"></a>
  <a href="#"><img src="../img/slovenia.jpg"></a>
  </div>
</div>
  
	</div>

	
	



<div id="mySidenav" class="sidenav">
 <a  href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
 <img href="../index.html" src="../logo/Learning_to_Live.png" alt="L2L Logo" width="200px" >
 
  
 
	<a href="../index.html">Home</a> 
	<a href="#">Resources</a> 
	<a href="#">Output</a> 
	<!-- <a href="news/news.php">News</a> -->
	<a href="../About/about.html">About Us</a> 
	<a href="../story.php"> Stories </a> 
	<a href="../Newsletter/newsletter.php"> Newsletter </a>
	<a href="../partners.html">Partners </a> 
<a href="../support.html">Support </a> 

</div>

<div id="main">

  <span style="color: white; cursor: pointer;"  onclick="openNav()">&#9776;</span>
</div>



<div class="content-in">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>  
    	<p> <a href="../index.html" style="color: red; font-size:20px; " ><strong>logout</strong></a> </p>
    <?php endif ?>
</div>
		
		<div class="links">
		<a href="Announcement/announcement.html">Link</a> 

		</div>
		
	

		
		
</body>
	<footer class="footer-distributed">

			<div class="footer-left">

				<img href="index.html" src="../logo/Learning_to_Live.png" alt="L2L Logo" width="200px" >

		

				<p class="footer-company-name">Learning to Live &copy; 2019</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Richmond Rd, Bradford</span> BD7 1DP, England</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>01274 232323</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">LearningtoLive@live.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

				<div class="footer-icons">

					<a href="https://en-gb.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/?lang=en-gb"><i class="fa fa-twitter"></i></a>
					<a href="https://uk.linkedin.com/"><i class="fa fa-linkedin"></i></a>
					<a href="https://github.com/"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
</html>