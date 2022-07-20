<?php
include 'inc/header2.php';

if (isset($_GET['remove'])) {
  $remove = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['remove']);
  $removeUser = $users->deleteUserById($remove);
}

if (isset($removeUser)) {
  echo $removeUser;
}
if (isset($_GET['deactive'])) {
  $deactive = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['deactive']);
  $deactiveId = $users->userDeactiveByAdmin($deactive);
}

if (isset($deactiveId)) {
  echo $deactiveId;
}
if (isset($_GET['active'])) {
  $active = preg_replace('/[^a-zA-Z0-9-]/', '', (int)$_GET['active']);
  $activeId = $users->userActiveByAdmin($active);
}

if (isset($activeId)) {
  echo $activeId;
}


 ?>
 
 <!DOCTYPE html>
<html lang="en">

<head>

  <title>UiTM PERLIS COUNSELING CLUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:counselingappointmentsystem@uitmperlis.com">counselingappointmentsystem@uitmperlis.com</a>
        <i class="bi bi-phone"></i> +6012-3456789
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">UiTM PERLIS COUNSELING CLUB</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
		  <li><a class="nav-link scrollto" href="#profile">User Profile</a></li>
		  <li><a class="nav-link scrollto active" href="listapply.php">List Applicant</a></li>
          <li class="dropdown" style="color:#7F05B0;"><a href="#"><span><b>Admin</b></span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php" target="_blank" ><span>Logout</span></a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
	  </div>
  </header><!-- End Header -->
  
  <br><br><br><br><br>
	  
      <div class="card1">
        <div class="card-header2">
          <h3><i class="fas fa-users mr-2"></i>User list <span class="float-right">Welcome! <strong>

          </strong></span></h3>
        </div>
        <div class="card-body pr-2 pl-3">

          <table id="example" class="table table-striped table-bordered1" style="width:100%">
                  <thead>
                    <tr>
                      <th  class="text-center">No</th>
                      <th  class="text-center">Name</th>
                      <th  class="text-center">Username</th>
                      <th  class="text-center">Mobile</th>
                      <th  class="text-center">Email</th>
                      <th  class="text-center">Address</th>
                      <th  width='25%' class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                      $allUser = $users->selectAllUserData();

                      if ($allUser) {
                        $i = 0;
                        foreach ($allUser as  $value) {
                          $i++;

                     ?>

                      <tr class="text-center1"
                      <?php if (Session::get("id") == $value->student_id) {
                        echo "style='background:#FFB6C1' ";
                      } ?>
                      >

                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->student_full_name; ?></td>
						<td><span class="badge badge-lg badge-secondary text-white"><?php echo $value->student_username; ?></span></td>
                        <td><?php echo $value->student_phoneno; ?> <br>
                        </td>
                        <td><?php echo $value->student_email; ?></td>
						<td><?php echo $value->student_address; ?></td>

                        <td>
                            <a class="btn btn-success btn-sm" href="approve.php">Approve</a>
                            <a onclick="return confirm('Are you sure To Reject ?')" class="btn btn-danger btn-sm " href="?remove=<?php echo $value->student_id;?>">Reject</a>
                        </td>
                      </tr>
                    <?php }}else{ ?>
                      <tr class="text-center">
                      <td>No user availabe now !</td>
                    </tr>
                    <?php } ?>

                  </tbody>

              </table>

        </div>
      </div>
</body>
</html>


  <?php
  include 'inc/footer.php';

  ?>
