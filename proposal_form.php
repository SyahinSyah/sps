<!DOCTYPE html>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proposal Form SPS - Student Activity Proposal System</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stickyfooter.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
	
  </head>

  <body>
    <!-- Navigation -->
    </<?php include "NavUserSPS.php"; ?>
	
	
	<br><br><br><br><br><br>
	<div class="container">
	<div class="form-group">
		<form class="form-signin" method="post" action="add_proposal.php" enctype="multipart/form-data">
			
			
			
			<h2 style="form-signup-heading" align="center">Proposal Form</h2><br>
			
			
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
			
			<b>Tentative (in pdf. format)</b>
			<input type="file" name="fileToUpload" class="form-control" id="fileToUpload" multiple>
			<br>
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

	<br><br><br><br><br><br><br><br>



    </<?php include "footer.php"; ?>

    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>


</html>