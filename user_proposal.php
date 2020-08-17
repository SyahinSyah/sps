<!DOCTYPE html>
<?php
session_start();
include 'db_connect.php';


$matric = $_SESSION['matric_no'];


$query="Select * 
		from student s
		join proposal p
		on s.matric_no = p.matric_no 
		join commitee c
		on p.proposal_id = c.proposal_id
		where s.matric_no='$matric'";
		
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
					  <i class="fas fa-file-alt img-responsive fa-7x" style="color:white;"></i>
					
					 
					</div>
					<div class="banner-text text-center">
					  <h3 class="white">MY PROPOSAL</h3>
					  <p>View all your proposal that has <br>been submitted before.</p>
					  <a href="#cta-2" class="btn btn-appoint">Your Proposal</a>
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
			 
			  <h2 class="section-title white lg-line">LIST OF YOUR PROPOSAL</h2>
			  <hr class="botm-line">
			</div>
			
			
			<div class="col-md-2"></div>
		  </div>
		</div>
	  </section>
	 </div>
	<!--/Black-->
	
	<style>
		div.scrollmenu {
		 
		  overflow: auto;
		  white-space: nowrap;
		}

		div.scrollmenu a {
		  display: inline-block;
		  color: white;
		  text-align: center;
		  padding: 14px;
		  text-decoration: none;
		}

		div.scrollmenu a:hover {
		  background-color: #777;
		}
	</style>
	
	<!--myPro-->
	  <section id="testimonial" class="section-padding">
		<div class="container">
		  <div class="row">
			<div class="col-md-0">
			  <i class="far fa-file-alt fa-3x" style="color:black;"></i>
			</div>
			
		
			  <div class="col-lg">
			  <div class="scrollmenu">
			  
			  <table class="table table-hover" borderstyle="solid" style="color:black;">
				<thead class="thead-dark">
				  <tr align="center"><br><br>             
					<th style="background-color:#ff9900;">PROPOSAL NAME</th>
					<th style="background-color:#ff9900;">OBJECTIVE</th>
					<th style="background-color:#ff9900;">DATE</th>
					<th style="background-color:#ff9900;">TIME</th>
					<th style="background-color:#ff9900;">VENUE</th>
					<th style="background-color:#ff9900;">NO PARTICIPANT</th>
					<th style="background-color:#ff9900;">VIP NAME</th>
					<th style="background-color:#ff9900;">TENTATIVE NAME </th>
					<th style="background-color:#ff9900;">TENTATIVE DOWNLOAD </th>
					<th style="background-color:#ff9900;">COMMITEE INFORMATION</th>
					<th style="background-color:#ff9900;">STATUS</th>
					<th style="background-color:#ff9900;">ADMINISTRATOR COMMENTS</th>					
					<th style="background-color:#ff9900;">UPDATE</th>
				
				  </tr>
				</thead>
				<tbody>
				  <?php while($row = mysqli_fetch_array($result)){ 
					$date=date_create($row['date']);
					$time1=date_create($row['start_time']);
					$time2=date_create($row['end_time']);
					$state=($row['prog_justification']);
					
						?>
					<tr>
					  <td><?php echo $row['proposal_Name'];?></td>
					  <td><?php echo $row['objective'];?></td>
					  <td><?php echo date_format($date,"d/m/Y");?></td>
					  <td><?php echo date_format($time1,"h:i:A") . " - " . date_format($time2,"h:i:A");?></td>
					  <td><?php echo $row['venue'];?></td>
					  <td><?php echo $row['noParticipant'];?></td>
					  <td><?php echo $row['vip_name'];?></td>
					  <td><?php echo $row['tentative'];?></td>
					  <td><div align="center"><a class="btn btn-success" target="_blank" href="<?php echo $row['tentative'];?>">View Tentative</a></div></td>
					  <td><div align="center"><a class="btn btn-success"  href="user_commitee.php?proposal_id=<?php print ($row['proposal_id']);?>">View</a></div></td> 
					  <td><?php echo $state?></td>
					  <td><?php echo $row['remark'];?></td>
					  <?php if($state=='Approve'){?>
					  <td></td>
					  <?php } else{?>
					  <td><div align="center"><a class="btn btn-primary" href="update_Student.php?proposal_id=<?php print ($row['proposal_id']);?>">Update</a></div></td>
					  <?php } ?>
					</tr>
					<?php } ?>
				</tbody>

			  </table>
				
			</div>
			<!-- /.col-lg-9 -->
			</div>
			</div>
			
				
				
		  </div>
		</div>
	  </section>
	  <!--/myProp-->
	
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
				<div class="col-sm-4">			
							<input type="hidden" name="PROPOSALID" value="100">	<br> 
							<h3><u>PROPOSAL INFORMATION</u></h3>
							<br><b>Proposal Name</b>
							<input type="text" name="PROPOSALNAME" class="form-control" placeholder="Insert Title">
							
							<b>Semester</b>
							<select name="PART" class="form-control p-1 " placeholder="Choose Position">
								<option value="1">PART 1</option>
								<option value="2">PART 2</option>
								<option value="3">PART 3</option>
								<option value="4">PART 4</option>
								<option value="5">PART 5</option>
								<option value="6">PART 6</option>
								<option value="7">PART 7</option>
							</select>
							
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
							<b>Tentative (in pdf. format)</b>
							<input type="file" name="file" class="form-control" multiple>
					
				</div>
				<div class="col-sm-4">
					
							
						
							
						
							<input type="hidden" name="prog_justification" value="Pending">
							<input type="hidden" name="COMMITEEID" value="200">
							<br>
							<h3><u>COMMITEE INFORMATION</u></h3><br>
							<b>Commitee Name</b>
							<input type="text" name="COMMITEENAME" class="form-control" placeholder="Insert Name">
							<b>Position</b>
							<select name="COMMITEEPOSITION" class="form-control p-1 " placeholder="Choose Position">
								<option value="PL">Project Leader</option>
								<option value="AJK">AJK</option>
								<option value="SU">Setiausaha</option>
								<option value="Bendahari">Bendahari</option>
							 </select>
							
							<b>Hp No.</b>
							<input type="text" name="COMMITEEHP" class="form-control " placeholder="010+">
							
							<br><br> 
							
							<button class="btn btn-lg btn-success btn-block" type="submit">Confirm</button>
							<button class="btn btn-lg btn-danger btn-block" type="reset">Reset</button>
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