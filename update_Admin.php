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
						<li class=""><?php echo "<a class='white'>" . $_SESSION["admin_name"] . "</a>" ?></li>
						<li class=""><a href="admin_page.php">Home</a></li>
						<li class=""><a href="admin_page.php">VIEW STUDENT PROPOSAL</a></li>
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
					  <i class="fas fa-file-alt img-responsive fa-7x" style="color:white;"></i>
					
					 
					</div>
					<div class="banner-text text-center">
					  <h3 class="white">STATUS PROPOSAL</h3>
					  <p>Insert status proposal student <br>whether the proposal is approve or reject.</p>
					  <a href="#cta-2" class="btn btn-appoint">Update Status</a>
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
			 
			  <h2 class="section-title white lg-line">UPDATE STATUS PROPOSAL </h2>
			  <hr class="botm-line">
			</div>
			
			
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	 </div>
	<!--/Black-->
	<br>
	
	<!--myUpdatePro-->
	<div class="container" style="margin:auto; width:63%; padding: 10px;">
		<div class="container">
			
				<?php while($row = mysqli_fetch_array($result)){ ?>	 
					<div class="form-group">
					<form class="form-signin" method="post" action="update_status.php" enctype="multipart/form-data" style="color:black;">				
					<div class="col-sm-4">
							<h3><u>PROPOSAL INFORMATION</u></h3>
							<br><b>Proposal ID</b>
							<input type="text" name="PROPOSALID" class="form-control" value="<?php echo $row['proposal_id'];?>" readonly>	 		
							<b>Proposal Name</b>
							<input type="text" name="PROPOSALNAME" class="form-control" value="<?php echo $row['proposal_Name'];?>"readonly>
							<b>Semester</b>
							<input name="PART" class="form-control p-1 " value="<?php echo $row['semester'];?>"readonly>
							<b>Objective</b>
							<textarea name="OBJECTIVE" rows="2" cols="40" class="form-control" readonly><?php echo $row['objective'];?></textarea>
							<b>Date</b>
							<input type="date" name="DATE" class="form-control" value="<?php echo $row['date'];?>" required	readonly><br>			
							<p align= "left"><b>Event Time:</b></p>
							<table align= "center-left">
								<tr><td><b>Start Time</b></td>
									<td><input type="time" name="STRT_TIME" value="<?php echo $row['start_time'];?>"readonly><br></td></tr>
								<tr><td><b>End Time</b></td>
									<td><input type="time" name="END_TIME" value="<?php echo $row['end_time'];?>"readonly></td></tr>
							</table>
							<br>			
							<b>Venue</b>
							<input type="text" name="VENUE" class="form-control" value="<?php echo $row['venue'];?>"readonly>
							<b>No. Participant</b>
							<input type="text" name="NOPARTICIPANT" class="form-control" value="<?php echo $row['noParticipant'];?>"readonly>
							<b>VIP Name</b>
							<input type="text" name="VIP" class="form-control" value="<?php echo $row['vip_name'];?>"readonly>
							<b>Tentative (in pdf. format)</b>
							<input type="file" name="fileToUpload" class="form-control" id="fileToUpload" multiple value="<?php echo $row['tentative'];?>"readonly>
					
					</div>
					<div class="col-sm-4">	
							
							<h3><u>COMMITEE INFORMATION</u></h3>
							<br><b>Commitee ID</b>
							<input type="text" name="COMMITEEID" class="form-control" value="<?php echo $row['commitee_id'];?>" disabled>	 			
							<br><b>Commitee Name</b>
							<input type="text" name="COMMITEENAME" class="form-control" value="<?php echo $row['commitee_name'];?>"readonly>
							<b>Position</b>
							<select name="COMMITEEPOSITION" class="form-control p-1 " value="<?php echo $row['commitee_position'];?>"readonly>
								<option value="PL">Project Leader</option>
								<option value="AJK">AJK</option>
								<option value="SU">Setiausaha</option>
								<option value="Bendahari">Bendahari</option>
							 </select>			
							<b>Hp No.</b>
							<input type="text" name="COMMITEEHP" class="form-control" value="<?php echo $row['commitee_no'];?>"readonly>
							
							<br><br><br>
							<h3><u>Please fill this information</u></h3>
							<b>Status</b>
							<select name="STATUS" class="form-control p-1">
								<option value="Approve">Approve</option>
								<option value="Reject">Reject</option>
							</select>
							<b>Comment</b>
							<textarea name="COMMENT" rows="2" cols="40" class="form-control" placeholder="Give some comment..."></textarea>
							<br><br> 
							<button class="btn btn-lg btn-primary btn-block" type="submit" >Update</button>
							<a class="btn btn-lg btn-danger btn-block" href="admin_page.php">Back</a></div></td>
							
					 <?php } ?>
					</div>
					</form>
				</div>
			</div>
		</div>
		</section>
	<!--/myUpdatePro-->
	
	<br><br><br><br><br>
	
	
	</<?php include "footer.php"; ?>
	
	
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

	</body>

</html>