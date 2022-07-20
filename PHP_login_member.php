<?php

include("dbconnect.php");
$email = $_POST['memberEmail'];
$password = $_POST['memberPwd'];

//session_start();

if(isset($_POST['email'])){

	$_SESSION['email'] = $memberEmail;

	$sql= "SELECT * from member where email='".$memberEmail."' and password= '".$memberPwd."' limit 1";

	$result=mysqli_query($conn,$sql);

	if (mysqli_num_rows($result)==1) {
		echo "<script>window.alert('Welcome ".$_SESSION['username']." ')</script>";
		echo "<script> window.location.href='dashboard.php' </script>";
				die;

	}
	else{
		echo "<script>window.alert('Sorry , username or password you entered is wrong ')</script>";
		echo "<script> window.location.href='login.php' </script>";
				die;

	}
}
?>