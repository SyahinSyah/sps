<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db_connect.php';


$query="Select * 
		from proposal;";
		
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>
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
					  <a class="navbar-brand" href="admin_page.php">
						<img src="img/logo1.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
					  </a>
					</div>
					
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li class=""><?php echo "<a class='white'>" . $_SESSION["admin_name"] . "</a>" ?></li>
						<li class=""><a href="admin_page.php">Home</a></li>
						<li class=""><a href="#testimonial">VIEW STUDENT PROPOSAL</a></li>
						<li class=""><a href="index.php">LOG OUT</a></li>
										
					  </ul>
					</div>
					
				  </div>
				</div>
			  </nav>
			  <div class="container">
				<div class="row">
				  <div class="banner-info">
					<div class="banner-logo text-center">
					<i class="fas fa-search fa-5x" style="color:white;"></i>
					 
					</div>
					
					<div class="banner-text text-center">
					  <h3 class="white">SEARCH BY SEMESTER</h3>
					  
					  <a href="#cta-2" class="btn btn-appoint">Search</a>
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

	
	<!--Black-->
	  <section id="cta-2" class="section-padding">
		<div class="container">
		  <div class=" row">
			<div class="col-md-2" ></div>
			<div class="text-left-md col-md-4 col-sm-4">
			  <h2 class="section-title white lg-line"><br>Search Proposal |</h2>
			  <hr class="botm-line">
			</div>
			
			
			<div class="col-md-3 col-sm-3">
				<br>
				<form class="form-signin" method="post" action="admin_viewSemester.php" style="color:black;">
						
						<a style="color:white;" >Semester</a>
							<select name="PART" class="form-control p-1 "><br>
								<option value="1">PART 1</option>
								<option value="2">PART 2</option>
								<option value="3">PART 3</option>
								<option value="4">PART 4</option>
								<option value="5">PART 5</option>
								<option value="6">PART 6</option>
								<option value="7">PART 7</option>
							</select><br>
						<button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Search</button>
						<a class="btn btn-lg btn-danger btn-block" href="admin_page.php">Back</a></div></td>
					</form>
			</div>
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	 </div>
	<!--/Black-->
	
	
	
	
	<!--Form-->
	<div class="container" style="margin:auto; width:70%; padding: 10px;">
		<section id="viewAllProposal" class="section-padding align-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
			
				</div>
				
				
			</div>
		</div>
		</section>
	</div>
	<!--/Form-->
	
	
	</<?php include "footer.php"; ?>
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>
	</body>

</html>