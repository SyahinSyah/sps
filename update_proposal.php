<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Proposal Check</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>
    <?php 
		session_start();
		include "db_connect.php";

        $propID=$_POST['PROPOSALID'];
		$add_matric=$_SESSION["matric_no"];
		$add_propName=$_POST['PROPOSALNAME'];
        $add_objective=$_POST['OBJECTIVE'];
        $add_date=$_POST['DATE'];
        $add_startTime=$_POST['STRT_TIME'];
		$add_endTime=$_POST['END_TIME'];
        $add_venue=$_POST['VENUE'];
		$add_noParticipant=$_POST['NOPARTICIPANT'];
		$add_vip=$_POST['VIP'];
		
		 $add_COMMITEENAME=$_POST['COMMITEENAME'];
		 $add_COMMITEEPOSITION=$_POST['COMMITEEPOSITION'];
		 $add_COMMITEEHP=$_POST['COMMITEEHP'];	

		//$_files['files']['name']
		$target_dir = "Proposal-upload/";
		$target_file = $target_dir . basename($_FILES['fileToUpload']['name']);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES['fileToUpload']['tmp_name']);
			if($check !== false) {
				echo "File is an image - " . $check['mime'] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES['fileToUpload']['size'] > 5000000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
				echo "The file ". basename( $_FILES['fileToUpload']['name']). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}			





		 
				
		$query= "UPDATE proposal
				 SET proposal_Name='$add_propName', objective='$add_objective', date='$add_date', start_time='$add_startTime', end_time='$add_endTime', venue='$add_venue', 
				 noParticipant=$add_noParticipant, vip_name='$add_vip' ,tentative = '".$target_file."'
				 WHERE proposal_id=$propID";
				 
		$query1 = "UPDATE commitee
				 SET commitee_name='$add_COMMITEENAME', commitee_position='$add_COMMITEEPOSITION', commitee_no='$add_COMMITEEHP' 
				 WHERE proposal_id=$propID";
		//echo $query;
		$result = mysqli_query($link,$query) or die("Query failed");//SQL statement for checking
		$result1 = mysqli_query($link,$query1) or die("Query failed");
		
		//checking either success or not
        if ($result && $result1)
		{
			echo " Update Successfully !";		
		}
		else
			echo "Problem occured !"; 	
	    mysqli_close($link);
		  
		 
       header("location:user_proposal.php");
    ?>
  </body>
</html>