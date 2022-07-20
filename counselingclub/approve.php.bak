<?php
include 'inc/header1.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['registeruser'])) {

  $registeruser = $users->studentRegistration($_POST);
}

if (isset($registeruser)) {
  echo $registeruser;
}


 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>Student Application</h3>
        </div>
        <div class="cad-body">



            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="name">Your name</label>
                  <input type="text" name="student_full_name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="username">Your username</label>
                  <input type="text" name="student_username"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="student_email"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="mobile">Mobile Number</label>
                  <input type="text" name="student_phoneno"  class="form-control">
                </div>
				<div class="form-group">
                  <label for="mobile">Address</label>
                  <input type="text" name="student_address"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="student_password" class="form-control">
                </div>
                <div class="form-group">
                  <button type="submit" name="registeruser" class="btn btn-success">Proceed</button>
                </div>


            </form>
          </div>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
