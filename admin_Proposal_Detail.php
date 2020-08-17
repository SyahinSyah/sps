<!DOCTYPE html>
<?php
session_start();
include 'db_connect.php';

$view_proposalID = $_GET['proposal_id'];

$query="Select * 
		from proposal p 
		join commitee c 
		on p.proposal_id = c.proposal_id 
		where p.proposal_id = $view_proposalID 
		order by p.proposal_id";
		
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
					  <i class="fas fa-user-graduate img-responsive fa-7x" style="color:white;"></i>
					 
					</div>
					<div class="banner-text text-center">
					  <h3 class="white">WELCOME</h3>
					  <?php
						echo "<h3 class='white'>" . $_SESSION["admin_name"] . "<h3>" ?>
					  <a href="#cta-2" class="btn btn-appoint">Your Details</a>
					  <a href="#testimonial" class="btn btn-appoint">PROPOSAL DETAIL</a>
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
			  <h2 class="section-title white lg-line"><br>USER DETAILS |</h2>
			  <hr class="botm-line">
			</div>
			
			
			<div class="col-md-4 col-sm-6">
				<br><br>
				<table class="table table-hover" border="1px solid black" style="color:black; background-color:#ffffff">
					<thead class="thead-white">
					  <tr align="leftcenter" align="top">
						<th style="background-color: #ff8c1a">ADMIN NAME</th>
						<th><?php echo $_SESSION["admin_name"];?></th></tr>
					  <tr align="leftcenter" align="top">
						<th style="background-color: #ff8c1a">ADMIN ID</th>
						<th><?php echo $_SESSION["admin_id"];?></th></tr>
					  <tr align="leftcenter" align="top">
						<th style="background-color: #ff8c1a">PASSWORD</th>
						<th><?php echo $_SESSION["admin_password"];?></th></tr>
					</thead> 
				</table>
			  
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
			

			  <h2 class="ser-title"><br>STUDENT PROPOSAL DETAILS</h2>
			  <hr class="botm-line">

			<div class="col-md-7">
				<h3 class="ser-title">PROPOSAL INFORMATION</h3>
				<hr class="botm-line">
				<table class="table table-hover" borderstyle="solid">
					<thead class="thead-dark">
					<?php while($row = mysqli_fetch_array($result)){ 
					$date=date_create($row['date']);
					$time1=date_create($row['start_time']);
					$time2=date_create($row['end_time']);?>
					  <tr align="center" style="color:white;"><br><br>             
						<th style="background-color:#004466;">PROPOSAL ID</th>
						<th style="background-color:#004466;">PROPOSAL NAME</th>
						<th style="background-color:#004466;">OBJECTIVE</th>
						<th style="background-color:#004466;">DATE</th>
						<th style="background-color:#004466;">TIME</th>
						<th style="background-color:#004466;">VENUE</th>
						<th style="background-color:#004466;">NO PARTICIPANT</th>
						<th style="background-color:#004466;">VIP NAME</th>
						<th style="background-color:#004466;">TENTATIVE NAME </th>
						<th style="background-color:#004466;">TENTATIVE DOWNLOAD </th>
						
						
						
					  </tr>
					</thead>
					<tbody>
					  
						<tr align="center" style="color:black;" >
						  <td style="background-color:#b3e6ff;"><?php echo $row['proposal_id'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['proposal_Name'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['objective'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo date_format($date,"d/m/Y");?></td>
						  <td style="background-color:#b3e6ff;"><?php echo date_format($time1,"h:i:A") . " - " . date_format($time2,"h:i:A");?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['venue'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['noParticipant'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['vip_name'];?></td>
						  <td style="background-color:#b3e6ff;"><?php echo $row['tentative'];?></td>
						  <td style="background-color:#b3e6ff;"><div align="center"><a class="btn btn-success" target="_blank" href="<?php echo $row['tentative'];?>">View Tentative</a></div></td>
					
						  
						  
						  
						  
			
						</tr>
						
					</tbody>
				</table>
				
				<table class="table table-hover"  style="color:black;">
				<h3 class="ser-title">COMMITEE INFORMATION</h3>
				<hr class="botm-line">
					<thead class="thead-dark">
						<tr align="center" style="color:white;"><br><br> 
							<th style="background-color:#004466;">COMMITEE ID</th>
							<th style="background-color:#004466;">COMMITEE NAME</th>
							<th style="background-color:#004466;">COMMITEE POSITION</th>
							<th style="background-color:#004466;">COMMITEE HP NO</th>
						</tr>
					</thead>
					<tbody>
						<tr align="center">
							<td style="background-color:#b3e6ff;"><?php echo $row['commitee_id'];?></td>
							<td style="background-color:#b3e6ff;"><?php echo $row['commitee_name'];?></td>
							<td style="background-color:#b3e6ff;"><?php echo $row['commitee_position'];?></td>
							<td style="background-color:#b3e6ff;"><?php echo $row['commitee_no'];?></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			
			</div>
			<!-- /.col-lg-9 -->
			</div>
			 	<td><div align="right"><a class="btn btn-danger" href="admin_page.php"">Back</a></div></td>
		  </div>
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
