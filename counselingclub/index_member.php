<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UiTM PERLIS COUNSELING CLUB.</title>
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
          <li><a class="nav-link scrollto" href="#appointment">Book Appointment</a></li>
		      <li><a class="nav-link scrollto" href="#profile">Profile</a></li>
          <li class="dropdown" style="color:#7F05B0;"><a href="#"><span><b>Member</b></span> <i class="bi bi-chevron-down"></i></a>
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


    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Appoinment Booking</h2>
          <p>Please fill in this form to make the appointment with the counsellors. You need to provides the correct details of yourself for future proposed. Appointment time is available from Monday to Friday (9.00 AM - 4.00 PM).</p>
        </div>

        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" >
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phonumber" id="phonumber" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime-local" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="users" id="users" class="form-select">
                <option value="">Select User</option>
                <option value="Student">Student</option>
                <option value="Staff">Staff</option>
                <option value="Guest">Guest</option>
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="counsellor" id="counsellor" class="form-select">
                <option value="">Select Counsellors</option>
                <option value="Mr. Zikri Bin Zamri">Mr. Zikri Bin Zamri</option>
                <option value="Ms. Anita Binti Syahmi">Ms. Anita Binti Syahmi</option>
                <option value="Ms. Syakira Binti Rizal">Ms. Syakira Binti Rizal</option>
              </select>
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          <br>
          <div class="text-center"><input type="submit" name="addAppointment" value="Book"></div>
        </form>
<?php

        if (isset($_POST['addAppointment'])){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phonumber = $_POST['phonumber'];
            $date = $_POST['date'];
            
            if (isset($_POST['users']))
            $users = $_POST['users'];
            else
            $users = "";

            if (isset($_POST['counsellor']))
            $counsellor = $_POST['counsellor'];
            else
            $counsellor = "";

            $message = $_POST['message'];

            //set database connection configuration
            include ("dbconnect.php");

            if (!$conn) {
             die("Connection failed: " . mysqli_connect_error());
            }
            // create SQL statement and run the query
            $sql =  "INSERT INTO appointment (fullname, email, phonumber, date, userchoose, counsellor, message)
                     VALUES ('$fullname', '$email','$phonumber','$date', '$userchoose', '$counsellor', '$message')";
            
            // Execute the query (the recordset $rs contains the
            
            if (mysqli_query($conn, $sql)) { ?>
                        <br><center> echo "<script>alert('Successfully booking appointment.'); window.location.href='index_member.php';</script>";</center>

            <?php
            } else {
            echo "Error cannot submit your appointment " . $sql . "<br>" . mysqli_error($conn);
            }
            mysqli_close($conn);
            }
            ?>
      </div>


    </section><!-- End Appointment Section -->
	
	<br>

  <!-- ======= Profile Section ======= -->

    <?php
    include 'dbconnect.php';

    // Check connection
    if (!$conn) {
    die("Connection failed: Please contact Admin");
    }

    if(isset($_GET['memberID'])){
      $memberID = $_GET['memberID'];
    }
    if(isset($_POST['memberID'])){
      $memberID = $_POST['memberID'];
    }
    

    $sql = "SELECT memberID, memberPwd, memberName, memberPhoneNo, memberEmail, memberAddress 
            FROM member WHERE memberID = '1'";
     $result = mysqli_query($conn, $sql);
     $row =mysqli_fetch_assoc($result);

     ?>

	<section id="profile" class="profile section-bg">
	<div class="container">

	<div class="section-title">
	<h2>Member Profile</h2>
	</div>

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
	<div class="page-content page-container" id="page-content">
		<div class="padding">
			<div class="row container d-flex justify-content-center">
	<div class="col-xl-6 col-md-12">
		<div class="card user-card-full">
			<div class="row m-l-0 m-r-0">
				<div class="col-sm-4 bg-c-lite-green user-profile">
					<div class="card-block text-center text-white">
						<div class="m-b-25">
							<img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
						</div>
						<h6 class="f-w-600"><?php echo $row['memberName']?></h6>
						<p>Student</p>
						<i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="card-block">
						<h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
						<div class="row">
							<div class="col-sm-6">
								<p class="m-b-10 f-w-600">Name</p>
								<input type="text" name="memberName" value="<?php echo $row['memberName']?>">
							</div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Password</p>
                <input type="text" name="memberPwd" value="<?php echo $row['memberPwd']?>">
              </div>
							<div class="col-sm-6">
								<p class="m-b-10 f-w-600">Phone Number</p>
								<input type="text" name="memberPhoneNo" value="<?php echo $row['memberPhoneNo']?>">
							</div>
							<div class="col-sm-6">
								<p class="m-b-10 f-w-600">Email</p>
								<input type="text" name="memberEmail" value="<?php echo $row['memberEmail']?>">
							</div>
              <div class="col-sm-6">
                <p class="m-b-10 f-w-600">Address</p>
                <input type="text" name="memberAddress" value="<?php echo $row['memberAddress']?>">
              </div>
						</div>
						<h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">History</h6>
						<div class="row">
							<div class="col-sm-6">
								<p class="m-b-10 f-w-600">Recent Appointment</p>
								<h6 class="text-muted f-w-400">Counsellor Wan Sunita</h6>
							</div>
							<div class="col-sm-6">
								<p class="m-b-10 f-w-600">Appointment Date</p>
								<h6 class="text-muted f-w-400">22 January 2022</h6>
							</div>
						</div>
            <br>
            <input type="submit" name="UpdateUser" value="Update Profile">
            <br>
					</div>
				</div>
			</div>
		</div>
	</div>
	 </div>
		</div>
	</div>
</form>

    <?php
  
    
    if (isset($_POST['UpdateUser'])){
      $memberName = $_POST['memberName'];
      $memberPwd = $_POST['memberPwd'];
      $memberPhoneNo = $_POST['memberPhoneNo'];
      $memberEmail = $_POST['memberEmail'];
      $memberAddress = $_POST['memberAddress'];

    include 'dbconnect.php';

    // Check connection
    if (!$conn) {
    die("Connection failed: Please contact Admin");
    }

    $sql = "UPDATE member SET
        memberName = '$memberName',
        memberPwd = '$memberPwd',
        memberPhoneNo = '$memberPhoneNo',
        memberEmail = '$memberEmail',
        memberAddress = '$memberAddress'
        WHERE memberID = '1'";

    // run query to insert the new data.
      if (mysqli_query($conn, $sql)) {
    // output data of each row
       ?>
            <br><center> echo "<script>alert('Profile successfully update.'); window.location.href='index_member.php';</script>";</center>
    <?php

    } else {
      echo "0 results";
    }
    //close the database connection
    mysqli_close($conn);
    }

    ?>

	</div>
	</section><!-- ======= End profile Section ======= -->

  
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