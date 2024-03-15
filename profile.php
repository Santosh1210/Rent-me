
  
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>Lorbek Cars Showroom Online Management System</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- preloader -->
    <!-- <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div> -->
    <!-- preloader end -->


    <!-- header area -->
    <?php include('./includes/navbar.php')?>
    <!-- header area end -->

    <?php 
     include './includes/connection.php';

if ($_SESSION['status']==='1') {
    header("location:admin.php");

}



$email = $_SESSION['email'];

if($_SESSION['status'] ==="1"){
    header('location:admin.php');
}

  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);


  ?>


    <main class="main">

        <!-- Profile -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/Lorbek.png)">
            <div class="container">
                <h2 class="breadcrumb-title">My Profile</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Profile</li>
                </ul>
            </div>
        </div>
        <!-- Profile -->


        <!-- user-profile -->
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="user-profile-sidebar">
                            <div class="user-profile-sidebar-top">
                                <div class="user-profile-img">
                                    <img src="assets/img/testimonial/user5.jpg" alt="">
                                    <button type="button" class="profile-img-btn"><i class="far fa-camera"></i></button>
                                    <input type="file" class="profile-img-file">
                                </div>
                                <h5><?php echo $arradata['first_name']?> <?php echo $arradata['last_name']?></h5>
                                <p><?php echo $arradata['email']?></p>
                            </div>
                            <ul class="user-profile-sidebar-list">
                                <li><a class="active" href="profile.php"><i class="far fa-gauge-high"></i> My Profile</a></li>
                                <li><a href="profile-order.php"><i class="far fa-user"></i> My Orders</a></li>
								<li><a href="shop.php"><i class="far fa-shopping-cart"></i> Shop Now</a></li>
                                <li><a href="change-password.php"><i class="far fa-lock"></i>Change Password</a></li>
                                <li><a href="./scripts/logout-script.php"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="user-profile-card">
                                        <h4 class="user-profile-card-title">Profile Info</h4>
                                        <div class="user-profile-form">
                                            <form action="" method="POST">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" name='fname' class="form-control" value="<?php echo $arradata['first_name']?>"
                                                                placeholder="First Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" name='lname' class="form-control" value="<?php echo $arradata['last_name']?>"
                                                                placeholder="Last Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Username</label>
                                                            <input type="text" name='username' class="form-control"
                                                                value="<?php echo $arradata['username']?>" placeholder="Username">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" name='phone' class="form-control"
                                                                value="<?php echo $arradata['phone']?>" placeholder="Phone">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" name='address' class="form-control"
                                                                value="<?php echo $arradata['address']?>" placeholder="Address">
                                                        </div>
                                                    </div>
													<div class="form-group">
														<label>Gender <i class="far fa-question-circle"></i></label><br>
                                						<input type="radio" value="Male" name="gender" <?php echo $arradata['gender'] == 'Male' ? 'checked' : ''; ?>>
														<label>Male &emsp;</label>
														<input type="radio" value="Female" name="gender" <?php echo $arradata['gender'] == 'Female' ? 'checked' : ''; ?>> 
														<label>Female &emsp;</label>
														<input type="radio" value="Others" name="gender" <?php echo $arradata['gender'] == 'Other' ? 'checked' : ''; ?>>
														<label>Others &emsp;</label>
                           		 					</div>
													<div class="form-group">
                                						<label>Birthday <i class="far fa-question-circle"></i></label><br>
                                						<input type="date" id="birthday" name="birthdate" value="<?php echo $arradata['birth_date']?>">
                            						</div>
                                                </div>
                                                <button type="submit" name='submit'  class="theme-btn my-3"><span class="far fa-user"></span> Save Changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user-profile end -->


        <?php 
include("./includes/connection.php");

        if(isset($_POST['submit'])){
            echo "om";

            $username = $_POST['username'];
         	$fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $birthdate = $_POST['birthdate'];
            $address = $_POST['address'];
         	
            $phone = $_POST['phone'];
         	
            $insertquery = "update users set username='$username', first_name='$fname', last_name='$lname', gender='$gender', birth_date='$birthdate', address='$address', email='$email', phone='$phone' where email='$email'";
         	$iquery = mysqli_query($con, $insertquery);
       
         	if($iquery){
                ?>
                    <script>
                        window.location.href = "profile.php";
                    </script>

                    <?php
         		}
         	
         }
	?>






    </main>

    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="assets/img/logo/logo-light.png" alt="">
                            </a>
                            <p class="mb-3">
                                We have the best Cars in the market. Buy your dream car now!
                            </p>
                            <ul class="footer-contact">
                                <li><a href="tel:+3 412 474 000"><i class="far fa-phone"></i>+3 412 474 000</a></li>
                                <li><i class="far fa-map-marker-alt"></i>Melnourne, VIC Australia 3000</li>
                                <li><a href="mailto:info@lorbek.com.au"><i
                                            class="far fa-envelope"></i>info@lorbek.com.au</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Quick Links</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Our Dealers</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Support Center</h4>
                            <ul class="footer-list">
                                <li><a href="#"><i class="fas fa-caret-right"></i> FAQ's</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Booking Tips</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Buy Vehicles</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Contact Us</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Sitemap</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="#"> Lorbek </a> All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <ul class="footer-social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="far fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/counter-up.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>