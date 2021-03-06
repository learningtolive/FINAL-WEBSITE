<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" type="text/css" href="template.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
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
	<a href="support.html">Support </a>


</div>
<div id="main">

  <span style="color: white; cursor: pointer;" onclick="openNav()">&#9776;</span>
</div>


  <div class="header">
  	<h2>Register</h2>
  </div>
	<?php include('server.php') ?>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>