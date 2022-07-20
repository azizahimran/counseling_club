<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
		      <li><a class="nav-link scrollto" href="#applicantList">Applicant List</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to UiTM Perlis Counseling Club</h1>
      <h2>We are team of counseling specialist making sure that every person <br>have a good care in physically and mentally.</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
	
	<br>
	<br><br>
	<br><br>
	<br><br>
	<br>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
            
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>UiTM Perlis Career & Counseling Unit</h3>
            <p>UiTM Career & Counseling Unit Perlis branch Arau Campus. The main purpose of this unit was established to provide counseling services and student career development programs in line with UiTM's desire to produce graduates who are skilled, competitive and meet current industry needs.</p>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Confidentiality</a></h4>
              <p class="description">Ensuring confidentiality is guaranteed.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Wide Opportunities</a></h4>
              <p class="description">Provide space and opportunities for clients to share problems, gain information and develop their potential.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Fast Service</a></h4>
              <p class="description">Always ready to provide friendly and comfortable counseling services.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	
	<section id="applicantList" class="profile section-bg">
	<div class="container1">

	<div class="section-title">
	<h2>Student Application List</h2></div>
  
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

  <div class="card1">
        <div class="card-header2">
          
        </div>
        <div class="card-body pr-2 pl-2">

          <table id="example" class="table table-striped table-bordered" style="width: 100%; background-color: white;">
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

  <?php
  include 'inc/footer.php';
?>
	</div>
	</div>
	</section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>UiTM Perlis Counselling Appointment System</h3>
            <p><br><strong>VISIT</strong><br>
              UITM PERLIS<br></p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>DISCOVER</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#registration">Registration</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Help & FAQs</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>OPENING HOURS</h4>
            <p>MON - FRI : 9.00 AM - 4.00 PM</p>
			<p>SAT & SUN : Closed</p>
          </div>
		  

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
		<div class="copyright">
   &copy;<strong><span>2022  UiTM Perlis Counselling Appointment System  </span></strong>. All Rights Reserved 
        </div>
        </div>
      </div>
  
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>


