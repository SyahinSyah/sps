<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include 'db_connect.php';


$query="Select * 
		from proposal;";
/*	
if (isset($_GET['orderbtn'])) {
	if ($_GET['s1'] == "M"){
		$i = $_GET['s2'];
		$append = ' AND MONTH(date) = '.$i.';';
	}
	elseif ($_GET['s1'] == "S"){
		$i = $_GET['s2'];
		$append = ' AND semester = '.$i.';';
	}
}
else{
	$append = ';';
}

$sql_admin = "SELECT * FROM student WHERE matric_no = '".$_SESSION['admin_id']."'";
if($result_admin = $connect->query($sql_admin))
{
	$rows_admin = $result_admin->fetch_array();
	$total_admin = $result_admin->num_rows;
}


$sql_proposal = "SELECT * FROM proposal, student WHERE student.matric_no = proposal.matric_no ".$append;
if($result_proposal = $connect->query($sql_proposal))
{
	$rows_proposal = $result_proposal->fetch_array();
	$total_proposal = $result_proposal->num_rows;
 	$num_proposal = 0;
}
*/
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
				<table class="table table-hover">
					<thead class="thead-white">
					  <tr align="leftcenter" align="top" >
						<th style="background-color:#006699;">ADMIN NAME</th>
						<th style="background-color:#006699;">ADMIN ID</th>
						<th style="background-color:#006699;">PASSWORD</th>
					  </tr>
					  <tr align="leftcenter" align="top" style="color:black;">
						<td><b><?php echo $_SESSION["admin_name"];?></b></td>
						<td><b><?php echo $_SESSION["admin_id"];?></b></td>
						<td><b><?php echo $_SESSION["admin_password"];?></b></td></tr>
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
			<div class="col-md-5">
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
				
					<div align="center"><a class="btn btn-lg btn-primary" href="admin_proposal_monthly.php?proposal_id=<?php print ($row['proposal_id']);?>">View By Monthly</a></div></td>
						<br>
					<div align="center"><a class="btn btn-lg btn-primary" href="admin_searchSemester.php">View By Semester</a></div></td>
				
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
	<script>
		jQuery(document).ready(function(){
			jQuery('#basicTable').DataTable({
				responsive: true,
				"aoColumnDefs": [{ 'bSortable': false, 'aTargets': [ 0,3 ] }]
			});
		});
	</script>
	<script type="text/javascript">
		function choose(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			s2.innerHTML = "";
			if(s1.value == "month"){
				var optionArray = ["|-- Select Month --","1|January","2|February","3|March","4|April","5|May","6|June","7|July","8|August","9|September","10|October","11|November","12|December",];
			} else if(s1.value == "semester"){
				var optionArray = ["|-- Select Semester --","1|1","2|2","3|3","4|4","5|5","6|6","7|7",];
			}
			for(var option in optionArray){
				var pair = optionArray[option].split("|");
				var newOption = document.createElement("option");
				newOption.value = pair[0];
				newOption.innerHTML = pair[1];
				s2.options.add(newOption);
			}
		}
	</script>
	</body>
</html>