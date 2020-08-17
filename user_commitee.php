<!DOCTYPE html>
<?php
session_start();
include 'db_connect.php';
$matric = $_SESSION['matric_no'];
$view_proposalID = $_GET['proposal_id'];


$query="Select * 
		from student s
		join proposal p
		on s.matric_no = p.matric_no 
		join commitee c
		on p.proposal_id = c.proposal_id
		where s.matric_no='$matric' and p.proposal_id = $view_proposalID";
		
$result = mysqli_query( $link,$query) or die("Query failed");	// SQL statement for checking
?>
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
					  <a class="navbar-brand" href="user_page.php">
						<img src="img/logo1.png" class="img-responsive" style="width: 140px; margin-top: -16px;">
					  </a>
					</div>
					
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li class=""><?php echo "<a class='white'>" . $_SESSION["full_name"] . "</a>" ?></li>
						<li class=""><a href="user_page.php">Home</a></li>
						<li class=""><a href="#cta-2">MY PROPOSAL</a></li>
						<li class=""><a href="#form">ADD PROPOSAL</a></li>
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
					  <h3 class="white">MY PROPOSAL</h3>
					  <p>View all your proposal that has <br>been submitted before.</p>
					  <a href="#cta-2" class="btn btn-appoint">VIEW COMMITEE</a>
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
			<div class="col-md-2"></div>
			<div class="text-left-md col-md-4 col-sm-4">
			<h2 class="ser-title white lg-line">COMMITEE INFORMATION</h2>
			<hr class="botm-line">
			</div>
			
			
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	 </div>
	<!--/Black-->
	
	
	<!--myProCom-->
	  <section id="testimonial" class="section-padding">
		<div class="container">
		  <div class="row">
			<div class="col-md-5">
				<i class="far fa-file-alt fa-3x" style="color:black;"></i>
			</div>
			<br>
		
			<div class="col-lg">
			<div class="section-padding align-center">  
			  <table class="table table-hover" style="color:black;">
				<thead class="thead-dark">
				  <tr align="center">
					<th style="background-color:#ff9900;">COMMITEE ID</th>
					<th style="background-color:#ff9900;">COMMITEE NAME</th>
					<th style="background-color:#ff9900;">COMMITEE POSITION</th>
					<th style="background-color:#ff9900;">COMMITEE HP NO</th>
				  </tr>
				</thead>
				<tbody>
				  <?php while($row = mysqli_fetch_array($result)){ ?>
					<tr>
					  <td><?php echo $row['commitee_id'];?></td>
					  <td><?php echo $row['commitee_name'];?></td>
					  <td><?php echo $row['commitee_position'];?></td>
					  <td><?php echo $row['commitee_no'];?></td>
					  
					  
					</tr>
					<?php } ?>
				</tbody>
			  </table>
			</div>  
			</div>
			<!-- /.col-lg-9 -->
			
			<div class="row">
			
			<br>
			<td><div align="right"><a class="btn btn-danger" href="user_proposal.php"">Back</a></div></td>
			<div class="col-lg">
			<div class="section-padding align-center">  
			</div>
			 
		  </div>
		</div>
	  </section>
	  <!--/myProCom-->
	
	<!--Form-->
	<div class="container" style="margin:auto; width:70%; padding: 10px;">
		<section id="form" class="section-padding align-center">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<h2 class="ser-title"><br><br>PROPOSAL FORM</h2>
					<hr class="botm-line">
				</div>
				
					<div class="form-group">
						<form class="form-signin" method="post" action="add_proposal.php" enctype="multipart/form-data" style="color:black;">				
				<div class="col-sm-3">			
							<input type="hidden" name="PROPOSALID" value="100">	 
							
							<br><b>Proposal Name</b>
							<input type="text" name="PROPOSALNAME" class="form-control" placeholder="Insert Title">
							<b>Objective</b>
							<textarea name="OBJECTIVE" rows="2" cols="40" class="form-control" placeholder="Insert Objective"></textarea>
							<b>Date</b>
							<input type="date" name="DATE" class="form-control"><br>
							
							<p align= "left"><b>Event Time:</b></p>
							<table align= "center-left">
								<tr><td><b>Start Time</b></td>
									<td><input type="time" name="STRT_TIME"><br></td></tr>
								<tr><td><b>End Time</b></td>
									<td><input type="time" name="END_TIME"></td></tr>
							</table>
							<br>
							<b>Venue</b>
							<input type="text" name="VENUE" class="form-control" placeholder="Insert Venue">
							<b>No. Participant</b>
							<input type="text" name="NOPARTICIPANT" class="form-control" placeholder="Insert Number">
							<b>VIP Name</b>
							<input type="text" name="VIP" class="form-control" placeholder="Insert Name">
					
				</div>
				<div class="col-sm-3">
					
							
							<br>
							<b>Tentative (in pdf. format)</b>
							<input type="file" name="fileToUpload" class="form-control" id="fileToUpload" multiple>
						
							<input type="hidden" name="prog_justification" value="Pending">
							<input type="hidden" name="COMMITEEID" value="200">	 
							
							<br><b>Commitee Name</b>
							<input type="text" name="COMMITEENAME" class="form-control" placeholder="Insert Name">
							<b>Position</b>
							<select name="COMMITEEPOSITION" class="form-control input-lg p-0" placeholder="Choose Position">
								<option value="PL">Project Leader</option>
								<option value="AJK">AJK</option>
								<option value="SU">Setiausaha</option>
								<option value="Bendahari">Bendahari</option>
							 </select>
							
							<b>Hp No.</b>
							<input type="text" name="COMMITEEHP" class="form-control " placeholder="010+">
							
							<br><br> 
							
							<button class="btn btn-lg btn-success btn-block" type="submit">Confirm</button>
							<button class="btn btn-lg btn-danger btn-block" type="cancel">Cancel</button>
					  </form>
					</div>
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