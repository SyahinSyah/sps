<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Status Check</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>
    <?php 
		session_start();
		include "db_connect.php";

        $propID=$_POST['PROPOSALID'];
		$status=$_POST['STATUS'];
		$remark=$_POST['COMMENT'];
				
		$query= "UPDATE proposal
				 SET prog_justification='$status', remark='$remark'
				 WHERE proposal_id=$propID";
		echo $query;
		$result = mysqli_query($link,$query) or die("Query failed");//SQL statement for checking
		  
		//checking either success or not
        if ($result)
		{
			echo " Update Status Successfully !";		
		}
		else
			echo "Problem occured !"; 	
	    mysqli_close($link);
		  
		 
       header("location:admin_Page.php");
    ?>
  </body>
</html>