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
					  <h1 class="white">Choose User</h1>
					  <p>Please choose only one type for user</p>
					  <a href="login_user.php" class="btn btn-appoint">Student</a>
					  <a href="login_admin.php" class="btn btn-appoint">Admin</a>
					</div>
					<div class="overlay-detail text-center">
					  <a href="#cta-2"><i class="fa fa-angle-down"></i></a>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		</section>
	<!--/ banner-->
	
	
	<br>
	<!--Black-->
	  <section id="cta-2" class="section-padding">
		<div class="container">
		  <div class=" row">
			<div class="col-md-2"></div>
			<div class="text-center-md col-md-4 col-sm-4">
			  <h2 class="section-title white lg-line"> Type of user |</h2>
			</div>
			
			<div class="col-md-4 col-sm-5">
				<p class="text-primary"><i>Student</i></p>
				User who want to fill and submit proposal to UITM
				<p class="text-primary"><i>Admin</i></p>
				Administrator who handle all the proposal of the UITM student.
			</div>
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	<!--Black-->
	<br>
	
	</<?php include "footer.php"; ?>
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

	</body>

</html>