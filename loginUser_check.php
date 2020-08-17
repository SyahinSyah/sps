<?php

include 'db_connect.php';
session_start();

$matric_no = $_POST['MATRIC'];
$pass = $_POST['PASSWORD'];

$query = "SELECT * 
		  FROM student 
		  where matric_no='$matric_no' AND user_password='$pass'";
$result = mysqli_query( $link,$query) or die("Query failed");//SQL statement for checking

//matric_no,full_name,course_code,gender,fakulty,club_name,user_password
if(mysqli_num_rows($result) <= 0){
	header("location:login_user.php");
}
else{
	$info = mysqli_fetch_array($result);
	$_SESSION["matric_no"] = $info["matric_no"];
	$_SESSION["full_name"] = $info["full_name"];
	$_SESSION["course_code"] = $info["course_code"];
	$_SESSION["gender"] = $info["gender"];
	$_SESSION["fakulty"] = $info["fakulty"];
	$_SESSION["club_name"] = $info["club_name"];
	$_SESSION["user_password"] = $info["user_password"];
    header("location:user_page.php");
}


mysqli_close($link);
?>
