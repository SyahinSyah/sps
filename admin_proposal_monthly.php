<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db_connect.php';




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
						<li class=""><a href="#cta-2">SEARCH BY MONTHLY</a></li>
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
					  <h3 class="white">SEARCH BY MONTHLY</h3>
					  
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

	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}
		tr:nth-child(even){background-color: #f2f2f2}

		th {
		  
		  color: white;
		}
	</style>
	
	<!--Black-->
	  <section id="cta-2" class="section-padding">
		<div class="container">
		  <div class=" row">
			<div class="col-md-2" ></div>
				<div class="text-left-md col-md-4 col-sm-4">
				  <h2 class="section-title white lg-line"><br>SEARCH PROPOSAL MONTHLY |</h2>
				  <hr class="botm-line">
				</div>		
				<div class="col-md-3 col-sm-3">
					<br>
					<div class="form-group">
					
					<form class="form-signin" method="post" action="admin_viewMonthly.php"  style="color:black;">				
					
							<br>
							<a style="color:white;">Month</a>
									<select name="MONTH" class="form-control p-1"><br>
										<option value="1">January-</option>
										<option value="2">Febuary</option>
										<option value="3">March</option>
										<option value="4">April</option>
										<option value="5">March</option>
										<option value="6">June</option>
										<option value="7">July</option>
										<option value="8">August</option>
										<option value="9">September</option>
										<option value="10">October</option>
										<option value="11">November</option>
										<option value="12">December</option>
									</select>
								<a style="color:white;">Year</a>
								<input type="text"  class="form-control" name="YEAR" placeholder="Insert Year"><br><br>
								<button class=" btn-lg btn-success btn-block" name="submit" type="submit">Search</button>
								<a class="btn btn-lg btn-danger btn-block" href="admin_page.php">Back</a></div></td>
					</form>
						
					</div>
				</div>
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