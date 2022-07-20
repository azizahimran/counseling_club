<?php

session_start();
include("../include/database.inc.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {


  extract($_POST);

  if(empty($student)) {
    echo "<script>alert('Please Enter Username.'); window.history.go(-1);</script>";
    exit();
  }

  if(empty($pass)) {
    echo "<script>alert('Please Enter Password.'); window.history.go(-1);</script>";
    exit();
  }

  $sql = "SELECT * FROM student WHERE student_username = '$student'";
  $result = mysqli_query($conn, $sql);

  if(!$row = mysqli_fetch_assoc($result)) {
    echo "<script>alert('Account Does Not Exists'); window.history.go(-1);</script>";
    exit();

  } else {
    if($row["student_password"] != $pass) {
      echo "<script>alert('Username or Password is Incorrect.'); window.history.go(-1);</script>";
      exit();
    }

    $_SESSION["student_id"] = $row["student_id"];
    $_SESSION["student_username"] = $row["student_username"];

    echo "<script>alert('Login Successfully.'); window.location.href='../indexU.php';</script>";
    exit();
  }



}

?>
