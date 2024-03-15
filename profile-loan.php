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
    <div class="preloader">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- preloader end -->


<!-- header area -->
<?php include('./includes/navbar.php')?>
    <!-- header area end -->


    <?php 

include './includes/connection.php';

if (!isset($_SESSION['email'])) { ?>
    <script>
        window.location.href = "login.php";
    </script>
<?php } 



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
                <h2 class="breadcrumb-title">Loan Application</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Loan Application</li>
                </ul>
            </div>
        </div>
        <!-- Profile -->


        <!-- user-profile -->
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">

                 

                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="user-profile-card">
                                        <p class="about-text">Personal Loan Application Form</p>
										<h4 class="user-profile-card-title">Applicant Personal Details</h4>
                                        <?php $amount = $_GET['amount'];?>
                                        <h5>Requested Loan Amount: <span style="color: red;">$<?php echo $amount ?></span></h5><br><br>
                                        <div class="user-profile-form">
                                            <form action="" method="POST" novalidate enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name" name="fname" value="<?php echo $arradata['first_name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" name="lname" value="<?php echo $arradata['last_name']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $arradata['email']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" placeholder="Phone" name="phone" value="<?php echo $arradata['phone']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $arradata['address']; ?>">
                                                        </div>
                                                    </div>
													<div class="form-group">
                                						<label>Birthday <i class="far fa-question-circle"></i></label><br>
                                						<input type="date" id="birthday" name="birth_date" value="<?php echo $arradata['birth_date']; ?>">
                            						</div>
													<div class="col-lg-3 w-auto">
														<div class="form-group">
															<label>Type of ID</label>
															<select class="form-control" name="loan_id">
																<option value="passport">Passport</option>
																<option value="citizenship">Citizenship Card</option>
																<option value="license">Driver License</option>
																<option value="medicare">Medicare Card</option>
															</select>
														</div>
													</div>
													<br><br><br><br>
													<input type="file" id="myfile" name="loan_proof">
                                                </div>
                                                <button type="submit" name="submit" class="theme-btn my-3"><span class="far fa-paper-plane"></span> Proceed Your Request</button>
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

         
         if(isset($_POST['submit'])){

            $uid = $arradata['id'];
            $p_insertquery = "update carts set status='1' where user_id=$uid and status='0'";
            $p_iquery = mysqli_query($con, $p_insertquery);


          $fname = $_POST['fname'];
          $lname = $_POST['lname'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $birth_date = $_POST['birth_date'];
          $load_id = $_POST['loan_id'];
          $loan_proof = $_FILES['loan_proof'];
          
          

          $p_filename = $loan_proof['name'];
            $p_filepath = $loan_proof['tmp_name'];
            $p_fileerror = $loan_proof['error'];
            if($p_fileerror ==0){ 

            $p_destfile = './upload/'.$p_filename;
            $r_destfile = './upload/'.$p_filename;
  

           move_uploaded_file($p_filepath,  $p_destfile);
            

          $p_insertquery = "insert into loan(first_name, last_name, email, phone, address, birth_date, loan_id, loan_proof, amount, status, user_id) values('$fname', '$lname', '$email', '$phone', '$address', '$birth_date', '$loan_id', '$r_destfile', '$amount', '0', '$uid')";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

               ?>
                 <script type="text/javascript">
                     location.href = "profile-order.php";
                 </script>

               <?php
          }else{
            echo "string";
          }
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