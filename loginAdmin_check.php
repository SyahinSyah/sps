<?php

include 'db_connect.php';
session_start();

$admin_id = $_POST['ID'];
$pass = $_POST['PASSWORD'];

$query = "SELECT * FROM admin where admin_id='$admin_id' AND admin_password='$pass'";
$result = mysqli_query( $link,$query) or die("Query failed");//SQL statement for checking


if(mysqli_num_rows($result) <= 0){
	header("location:login_admin.php");
}
else{
	$info = mysqli_fetch_array($result);
	$_SESSION["admin_id"] = $info["admin_id"];
	$_SESSION["admin_name"] = $info["admin_name"];
	$_SESSION["admin_password"] = $info["admin_password"];
    header("location:admin_Page.php");
}


mysqli_close($link);
?>
