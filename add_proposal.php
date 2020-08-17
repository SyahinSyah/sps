<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Proposal Check</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>
    <?php 
		session_start();
		include "db_connect.php";

        $add_propID=$_POST['PROPOSALID'];
		$add_matric=$_SESSION["matric_no"];
		$add_propName=$_POST['PROPOSALNAME'];
		$add_semester=$_POST['PART'];
        $add_objective=$_POST['OBJECTIVE'];
        $add_date=$_POST['DATE'];
        $add_startTime=$_POST['STRT_TIME'];
		$add_endTime=$_POST['END_TIME'];
        $add_venue=$_POST['VENUE'];
		$add_noParticipant=$_POST['NOPARTICIPANT'];
		$add_vip=$_POST['VIP'];
		$add_status=$_POST['prog_justification'];
	
		 $add_COMMITEENAME=$_POST['COMMITEENAME'];
		 $add_COMMITEEPOSITION=$_POST['COMMITEEPOSITION'];
		 $add_COMMITEEHP=$_POST['COMMITEEHP'];
		 
		//$_files['files']['name']
		$target_dir = "Proposal-upload/";
		$target_file = $target_dir . basename($_FILES['file']['name']);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES['file']['tmp_name']);
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
		if ($_FILES['file']['size'] > 5000000000) {
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
				echo "The file ". basename( $_FILES['file']['name']). " has been uploaded.";
			} else {
				echo "Sorry, there was an error uploading your file.";
			}
		}			
				
		$query= "INSERT INTO proposal(matric_no,proposal_Name,semester,objective,date,start_time,end_time,venue,noParticipant,vip_name,tentative, prog_justification) 
				VALUES ('$add_matric','$add_propName','$add_semester','$add_objective','$add_date','$add_startTime','$add_endTime','$add_venue','$add_noParticipant'
				,'$add_vip','".$target_file."','$add_status')";
		
	
		$result = mysqli_query($link,$query) or die("Query failed line 80 ");//SQL statement for checking
		$proposal_id= mysqli_insert_id($link);
		//$query= "SELECT proposal_id from Proposal where proposal_id = )";

		$query1="insert into commitee(proposal_id, commitee_name, commitee_position, commitee_no )  values('$proposal_id','$add_COMMITEENAME','$add_COMMITEEPOSITION','$add_COMMITEEHP')";
				
	
		$result1 = mysqli_query($link,$query1) or die("Query failed failed line 87");//SQL statement for checking
		  
		//checking either success or not
        if ($result&& $result1)
		{
			echo " Add Successfully !";		
		}
		else
			echo "Problem occured !"; 	
	    mysqli_close($link);
		  
		 
       header("location:user_page.php");
    ?>
  </body>
</html>
