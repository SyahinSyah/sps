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
						<li class=""><a href="#register">CREATE ACCOUNT</a></li> 
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
					  <p>Please sign in student <br> matric number and password</p>
					  <a href="#testimonial" class="btn btn-appoint">Sign In</a>
					  <a href="#register" class="btn btn-appoint">Register</a>
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
	
	<!--sign-in-->
	<section id="testimonial" class="section-padding">
		<div class="container" style="margin:auto; width:50%; padding: 10px;">
		<div class="container">
		  <div class="row">
				<div class="col-sm-6">
					<h2 class="ser-title"><br><br>Please Sign In</h2>
					<hr class="botm-line">
				
					<form class="form-signin" method="post" action="loginUser_check.php" style="color:black;">
						<b>Matric No. </b>
						<label for="matric" class="sr-only">matric </label>
						<input type="text" name="MATRIC" class="form-control" placeholder="Matric Number" required>
						<b>Password </b>
						<label for="PASSWORD" class="sr-only">Password</label>
						<input type="password" name="PASSWORD" class="form-control" placeholder="Password" required>
						
						
					
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					
					</div>
					</form>
				</div>
			 
		  </div>
		</div>
	  </div>
	</section>
	  <!--/sign-in-->
	<br>
	
	<!--register-->
	<div class="container" style="margin:auto; width:70%; padding:10px;">
		<section id="register" class="section-padding align-center">
			<div class="row">
				<div class="col-sm-5">
					<h2 class="ser-title"><br><br>CREATE NEW ACCOUNT</h2>
					<hr class="botm-line">
				</div>
				
					<div class="form-group">
						<form class="form-signin" method="post" action="add_user.php" enctype="multipart/form-data" style="color:black;">				
				<div class="col-sm-3">			
							
							
							<b>Matric No.</b>
							<input type="text" name="MATRICNO" class="form-control" placeholder="Matric No. (2018654423)">
							<b>Full Name</b>
							<input type="text" name="FULLNAME" class="form-control" placeholder="Full Name">
							<b>Course Code</b>
							<input type="text" name="COURSECODE" class="form-control" placeholder="Course Code"><br>
							<b>Gender :</b>
							<div class="radio">
							  <label>
								<input type="radio" name="GENDER" value="Male">Male<br>
								<input type="radio" name="GENDER" value="Female">Female
							  </label>
							</div>

				</div>
				<div class="col-sm-4">
					
							
							<b>Faculty Name</b> 
							<select class="form-control input-lg p-1" name="FACULTY" >
								<option value="FSKM">FSKM(Fakulti Sains Dan Komputer)</option>
								<option value="FPA">FPA (Fakulti Perladangan & Agrikultur)</option>
							</select>
							<b>Club</b>
							<input type="club" name="CLUB" class="form-control" placeholder="Club Name">
					
							<b>Create Password</b>
							<input type="password" name="PASSWORD" class="form-control" placeholder="Password">
							<br>
							<button class="btn btn-lg btn-success btn-block" type="submit">Confirm</button>
							<button class="btn btn-lg btn-danger btn-block" type="reset">Reset</button>
					  </form>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--/register-->
	
	
	
	
	</<?php include "footer.php"; ?>
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

	</body>

</html>