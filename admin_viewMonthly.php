<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db_connect.php';


$month = $_POST['MONTH'];
$year = $_POST['YEAR'];


$query="Select * 
		from proposal
		where date between '".$year."/".$month."/1' and '".$year."/".$month."/31'";
		
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
					   <i class="far fa-grin-beam fa-5x" style="color:white;"></i>
					 
					</div>
					<div class="banner-text text-center">
					  <h3 class="white">WELCOME</h3>
					  <?php
						echo "<h3 class='white'>" . $_SESSION["admin_name"] . "<h3>" ?>
					  <a href="#cta-2" class="btn btn-appoint">Your Details</a>
					  <a href="#testimonial" class="btn btn-appoint">Student Proposal</a>
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
			  <h2 class="section-title white lg-line"><br>USER DETAILS |</h2>
			  <hr class="botm-line">
			</div>
			
			
			<div class="col-md-6 col-sm-6">
				<br><br>
				<form class="form-signin" method="get" action="admin_viewMonthly.php" style="color:black;">
						<br>
						Type of Search
							<select name="MONTH"><br>
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
							</select><br>
						Session Year
							<input type="text" name="YEAR" placeholder="Insert YEAR"><br>
						<button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Search</button>
					</form>
			  
			</div>
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	 </div>
	<!--/Black-->
	
	<!--myPro-->
	  <section id="testimonial" class="section-padding">
		<div class="container">
		  <div class="row">
			<div class="col-md-5">
			  <i class="far fa-file-alt fa-3x" style="color:black;"><br></i>
			  <h2 class="ser-title"><br><br>ALL STUDENT PROPOSAL</h2>
			  <hr class="botm-line">
			</div>
			
		
			  <div class="col-lg">
			  <table class="table table-hover" borderstyle="solid" style="color:black;" >
				<thead class="thead-dark">
				  <tr align="center"><br><br>             
					<th style="background-color:#000000;" >PROPOSAL ID</th>  
					<th style="background-color:#000000;">PROPOSAL NAME</th>  
					<th style="background-color:#000000;">DATE</th>
					<th style="background-color:#000000;">STATUS</th>
					<th style="background-color:#000000;">COMMENTS</th>
					<th style="background-color:#000000;">VIEW</th>
					<th style="background-color:#000000;">CHANGE STATUS</th>
					<th style="background-color:#000000;">DELETE</th>
				  </tr>
				</thead>
				<tbody>
				  <?php while($row = mysqli_fetch_array($result)){ 
				  $date=date_create($row['date']);?>
					<tr>
					  <td><?php echo $row['proposal_id'];?></td>
					  <td><?php echo $row['proposal_Name'];?></td>
					  <td><?php echo date_format($date,"d/m/Y");?></td>
					  <td><?php echo $row['prog_justification'];?></td>
					  <td><?php echo $row['remark'];?></td>
					  <td><div align="center"><a class="btn btn-success" href="admin_Proposal_Detail.php?proposal_id=<?php print ($row['proposal_id']);?>"onclick="View list of commitee?">View</a></div></td>
					  
					  
					  <td><div align="center"><a class="btn btn-primary" href="update_Admin.php?proposal_id=<?php print ($row['proposal_id']);?>">Change</a></div></td>
					  <td><div align="center"><a class="btn btn-danger" href="admin_delete_proposal.php?proposal_id=<?php echo $row['proposal_id'];?>">Delete</a></div></td>
					</tr>
					<?php } ?>
				</tbody>

			  </table>
			</div>
			<!-- /.col-lg-9 -->
			</div>
			 
		  </div>
		  <div align="center"><a class="btn btn-primary" href="admin_proposal_monthly.php?proposal_id=<?php print ($row['proposal_id']);?>">View By Monthly</a></div></td>
				<br>
				<div align="center"><a class="btn btn-primary" href="admin_searchSemester.php?proposal_id=<?php print ($row['proposal_id']);?>">View By Semester</a></div></td>
		</div>
	  </section>
	  <!--/myProp-->
	
	
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