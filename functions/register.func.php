<?php

session_start();
include("../include/database.inc.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {



  extract($_POST);

  if(empty($name)) {
    echo "<script>alert('Please Enter Name.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($phone)) {
    echo "<script>alert('Please Enter Phone Number.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($email)) {
    echo "<script>alert('Please Enter Email.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($address)) {
    echo "<script>alert('Please Enter Address.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($username)) {
    echo "<script>alert('Please Enter Username.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($psw)) {
    echo "<script>alert('Please Enter Password.'); window.history.go(-1);</script>";
    exit();
  }

  $sql = "INSERT INTO user (user_full_name, user_phoneno, user_email, user_address, user_username, user_password)
  VALUES ('$name', '$phone', '$email', '$address', '$username', '$psw')";

  if(!mysqli_query($conn, $sql)) {
    echo "<script>alert('Register Failed.'); window.history.go(-1);</script>";
    exit();
  }

  echo "<script>alert('Register Successfully'); window.location.href='../loginU.php';</script>";
  exit();

}


?>
