<?php
session_start();
include 'db_connect.php';

		//delete data
		
			$delete_id = $_GET['proposal_id'];
			
			$query="delete 
					from proposal 
					where proposal_id = $delete_id";
					
			$query1="delete 
					from commitee 
					where proposal_id = $delete_id";
			
			$result = mysqli_query( $link,$query) or die("Query failed");
			$result1 = mysqli_query( $link,$query1) or die("Query failed");
			
			if($result && $result1)
			{
				echo " delete successfull ! ";
			}
			
			else
			{
				echo "problem occured !";
			}
			header("location:admin_page.php");
?>