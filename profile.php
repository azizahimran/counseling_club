<?php
include 'inc/header.php';
Session::CheckSession();

 ?>

<?php

if (isset($_GET['id'])) {
  $userid = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['id']);

}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
  $updateUser = $users->updateUserByIdInfo($userid, $_POST);

}
if (isset($updateUser)) {
  echo $updateUser;
}




 ?>

 <div class="card ">
   <div class="card-header">
          <h3>User Profile <span class="float-right"> <a href="index_admin.php" class="btn btn-primary">Back</a> </h3>
        </div>
        <div class="card-body">

    <?php
    $getUinfo = $users->getUserInfoById($userid);
    if ($getUinfo) {






     ?>


          <div style="width:600px; margin:0px auto">

          <form class="" action="" method="POST">
              <div class="form-group">
                <label for="name">Your name</label>
                <input type="text" name="student_full_name" value="<?php echo $getUinfo->student_full_name; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="username">Your username</label>
                <input type="text" name="student_username" value="<?php echo $getUinfo->student_username; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="student_email" value="<?php echo $getUinfo->student_email; ?>" class="form-control">
              </div>
			  <div class="form-group">
                <label for="password">Your password</label>
                <input type="text" name="student_password" value="<?php echo $getUinfo->student_password; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="text" id="mobile" name="student_phoneno" value="<?php echo $getUinfo->student_phoneno; ?>" class="form-control">
              </div>
			  <div class="form-group">
                <label for="address">Your address</label>
                <input type="text" name="student_address" value="<?php echo $getUinfo->student_address; ?>" class="form-control">
              </div>

              <?php if (Session::get("student_id") == $getUinfo->student_id) {?>


              <div class="form-group">
                <button type="submit" name="update" class="btn btn-success">Update</button>
                <a class="btn btn-primary" href="changepass.php?student_id=<?php echo $getUinfo->student_id;?>">Password change</a>
              </div>
            
              <?php   }else{ ?>
                  <div class="form-group">

                    <a class="btn btn-primary" href="listapply.php">Ok</a>
                  </div>
                <?php } ?>


          </form>
        </div>

      <?php }else{

        header('Location:listapply.php');
      } ?>



      </div>
    </div>


  <?php
  include 'inc/footer.php';

  ?>
