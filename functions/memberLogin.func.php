<?php

session_start();
include("../include/database.inc.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {


  extract($_POST);

  if(empty($email)) {
    echo "<script>alert('Please Enter Email.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($password)) {
    echo "<script>alert('Please Enter Password.'); window.history.go(-1);</script>";
    exit();
  }

  $sql = "SELECT * FROM member WHERE memberEmail = '$email'";
  $result = mysqli_query($conn, $sql);

  if(!$row = mysqli_fetch_assoc($result)) {
    echo "<script>alert('Account Does Not Exists'); window.history.go(-1);</script>";
    exit();

  } else {
    if($row["memberPwd"] != $password) {
      echo "<script>alert('Email or Password is Incorrect.'); window.history.go(-1);</script>";
      exit();
    }

    $_SESSION["memberID"] = $row["memberID"];
    $_SESSION["memberEmail"] = $row["memberEmail"];

    echo "<script>alert('Login Successfully.'); window.location.href='../index_member.php';</script>";
    exit();
  }



}

?>
