<!DOCTYPE html>
<html lang="en">

	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">

	  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
	  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" href="vendor/fontawesome/css/all.css" >
	  <link rel="stylesheet" href="/vendor/w3/w3.css">	  
	</head>
	
	<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<!--banner-->
		<section id="banner" class="banner">
			<div class="bg-color">
			  <nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
				  <div class="col-md-12">
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					  <a class="navbar-brand" href="index.php">
						<img src="img/logo1.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
					  </a>
					</div>
					
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li class=""><a href="choose.php">Choose User</a></li>
						<li class=""><a href="index.php">Home</a></li> 
					  </ul>
					</div>
					
				  </div>
				</div>
			  </nav>
			  <div class="container">
				<div class="row">
				  <div class="banner-info">
					<div class="banner-logo text-center">
					  <i class="far fa-user-circle img-responsive fa-9x" style="color:white;"></i>
					</div>
					<div class="banner-text text-center">
					  <h1 class="white">Sign In</h1>
					  <p>Please sign in admin <br> username and password</p>
					  <a href="#sign" class="btn btn-appoint">Sign In</a>
					</div>
					<div class="overlay-detail text-center">
					  <a href="#sign"><i class="fa fa-angle-down"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</section>
	<!--/ banner-->
	
	
	
	<div class="container" style="margin:auto; width:50%; padding: 10px;">
		<section id="sign" class="section-padding align-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="ser-title"><br><br>Please Sign In</h2>
					<hr class="botm-line">
				
					<form class="form-signin" method="post" action="loginAdmin_check.php" style="color:black;">
						
						<label for="id" class="sr-only">Admin ID </label>
						Admin ID
						<input type="text" name="ID" class="form-control" placeholder="Admin ID" required>
						<label for="PASSWORD" class="sr-only">Password</label>
						Password
						<input type="password" name="PASSWORD" class="form-control" placeholder="Password" required>
						<div class="checkbox">
						  <label>
							<input type="checkbox" value="remember-me"> Remember me
						  </label>
						</div>
						<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>
					</form>
				</div>
			</div>
		</div>
		</section>
	</div>
	
	
	
	</<?php include "footer.php"; ?>
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

	</body>

</html>