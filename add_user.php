<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sign Up - SPS</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signup.css" rel="stylesheet">
  </head>

  <body>
    <?php 

          include "db_connect.php";

          $add_matricNo=$_POST['MATRICNO'];
          $add_fullName=$_POST['FULLNAME'];
          $add_courseCode=$_POST['COURSECODE'];
          $add_gender=$_POST['GENDER'];
		  $add_faculty=$_POST['FACULTY'];
          $add_club=$_POST['CLUB'];
		  $add_password=$_POST['PASSWORD'];
		  

         $query= "INSERT INTO student(matric_no,full_name,course_code,gender,fakulty,club_name,user_password) 
				VALUES ('$add_matricNo','$add_fullName','$add_courseCode','$add_gender','$add_faculty','$add_club','$add_password')" ;
				
          $result = mysqli_query($link,$query)or die("Query failed");
		
		  
		  //checking either success or not
         if ($result){
		 echo " Add Successfully ! <a href='login_user.php'> back to menu </a>";		
		 }
		else{
		echo "Problem occured !";
		}		
	    mysqli_close($link);
		  
		 
        header("location:login_user.php");
    ?>
  </body>
</html>
