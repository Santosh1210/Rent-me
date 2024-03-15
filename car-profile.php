

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
    <link rel="stylesheet" href="assets/css/flex-slider.min.css">
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

if (!isset($_SESSION['email'])) { ?>
    <script>
        window.location.href = "login.php";
    </script>
<?php } ?>


    <!-- sidebar-popup -->
    <div class="sidebar-popup">
        <div class="sidebar-wrapper">
            <div class="sidebar-content">
                <button type="button" class="close-sidebar-popup"><i class="far fa-xmark"></i></button>
                <div class="sidebar-logo">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
                <div class="sidebar-about">
                    <h4>About Us</h4>
                    <p>The best way to fulfill your dream is to search online, Lorbek has eveything you need to make your dream come true.</p>
                </div>
                <div class="sidebar-contact">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>
                            <h6>Email</h6>
                            <a href="mailto:info@example.com"><i class="far fa-envelope"></i>info@lorbek.com.au</a>
                        </li>
                        <li>
                            <h6>Phone</h6>
                            <a href="tel:+21236547898"><i class="far fa-phone"></i>+3 412 474 000</a>
                        </li>
                        <li>
                            <h6>Address</h6>
                            <a href="#"><i class="far fa-location-dot"></i>Melbourne, VIC Australia 3000</a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-social">
                    <h4>Follow Us</h4>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-popup end -->


    <main class="main">

        <!-- Car details -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/Lorbek.png)">
            <div class="container">
                <h2 class="breadcrumb-title">Car Profile</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Car Profile</li>
                </ul>
            </div>
        </div>
        <!-- Car details end -->



        <?php 

include './includes/connection.php';
$id = $_GET['id'];
$p_selectquery = "select * from cars where id = '$id'";
$p_query = mysqli_query($con, $p_selectquery);
$p_res = mysqli_fetch_array($p_query);
?>





        <!-- car single -->
        <div class="car-item-single bg py-120">
            <div class="container">
                <div class="car-single-wrapper">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="car-single-details">
                                <div class="car-single-widget">
                                    <div class="car-single-top">
                                        <span class="car-status status-1">Brand New</span>
                                        <h3 class="car-single-title"><?php echo $p_res['name'] ?></h3>
                                    </div>
                                    <div class="car-single-slider">
                                        <div class="item-gallery">
                                            <div class="flexslider-thumbnails">
                                                <ul class="slides">
                                                    <li data-thumb="assets/img/car/mercedez.jpg">
														<img src="<?php echo $p_res['image'] ?>" alt="#">
                                                    </li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-single-widget">
                                    <h4 class="mb-4">Car Information</h4>
                                    <div class="car-key-info">
                                        <div class="row">
                                           
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="car-key-item">
                                                    <div class="car-key-icon">
                                                        <i class="flaticon-speedometer"></i>
                                                    </div>
                                                    <div class="car-key-content">
                                                        <span>Mileage</span>
                                                        <h6><?php echo $p_res['mileage'] ?> (mi)</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="car-key-item">
                                                    <div class="car-key-icon">
                                                        <i class="flaticon-settings"></i>
                                                    </div>
                                                    <div class="car-key-content">
                                                        <span>Transmission</span>
                                                        <h6><?php echo $p_res['transmission'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="car-key-item">
                                                    <div class="car-key-icon">
                                                        <i class="flaticon-drive"></i>
                                                    </div>
                                                    <div class="car-key-content">
                                                        <span>Year</span>
                                                        <h6><?php echo $p_res['year'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="car-key-item">
                                                    <div class="car-key-icon">
                                                        <i class="flaticon-gas-station"></i>
                                                    </div>
                                                    <div class="car-key-content">
                                                        <span>Fuel Type</span>
                                                        <h6><?php echo $p_res['fueltype'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-6">
                                                <div class="car-key-item">
                                                    <div class="car-key-icon">
                                                        <i class="flaticon-drive"></i>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car-single-widget">
                                    <div class="car-single-overview">
                                        <h4 class="mb-3">Description</h4>
                                        <div class="mb-4">
                                            <p><?php echo $p_res['description'] ?></p>
                                            
                                        </div>
                                    </div>
                                </div>

                                


                                <div class="car-single-widget">
                                
                                    <div class="car-single-review">
                                        <div class="blog-comments mb-0">
                                            <div class="blog-comments-form">
                                                <h4>Leave A Review</h4><br>
                                                <form action="" method="POST">
                                                    <div class="row">
                                                        <br>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="5" placeholder="Your Comment" name="r_msg"></textarea>
                                                            </div><br>
                                                            <button type="submit" name="review" class="theme-btn"><span class="far fa-paper-plane"></span> Submit Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                       include './includes/connection.php';
                       $req = "select * from review where carid='$id'";
                       $p_req = mysqli_query($con, $req);
                         $i = 0;
                       while($req_res = mysqli_fetch_array($p_req)){
                        $i = $i+1;

                      ?>

<div class="car-single-widget">
                        <p><?php echo $req_res['email']; ?></p>
                        <p><b>Review: </b><br><?php echo $req_res['review_msg']; ?></p>

                      </div>

                      <?php } ?>


                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="car-single-widget car-item">
                                <h4 class="car-single-price">$<?php echo $p_res['price'] ?></h4>
                                <ul class="car-single-meta">
                                    <li><i class="fa-regular fa-gauge-high"></i> <?php echo $p_res['mileage'] ?> Miles</li><br><br>
                                    <a href="./scripts/cars-addtocart-script.php?id=<?php echo $p_res['id'] ?>"><button class="theme-btn"><i class="far fa-cart-plus"></i> Add to Cart</button></a>
                                    
                                </ul>
								
                            </div>

                            <?php


$email = $_SESSION['email'];



  $showquery = "select * from users where email='$email'";
  $showdata = mysqli_query($con, $showquery);
  $arradata = mysqli_fetch_array($showdata);


  ?>



							
                            <div class="car-single-widget">
                                <h5 class="mb-3">Have a Question!</h5>
                                <div class="car-single-form">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Name" name="name" value="<?php echo  $arradata['first_name']; ?> <?php echo  $arradata['last_name']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Email" name="email" value="<?php echo  $arradata['email']; ?>">
                                        </div>
										<div class="form-group">
                                            <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" value="<?php echo  $arradata['phone']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" placeholder="Write Message...." name="message"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="theme-btn">Send Enquiry<i class="fas fa-arrow-right-long"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                            <?php 

         
         if(isset($_POST['submit'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $message = $_POST['message'];

          $p_insertquery = "insert into enquiry(name, email, phone, message) values('$name', '$email', '$phone', '$message')";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

               ?>
                 <script type="text/javascript">
                    
                     location.href = "car-profile.php?id=<?php echo $id ?>";
                 </script>

               <?php
          }else{
            echo "string";
          }
          
    }     
  ?>




<?php 

if(isset($_POST['review'])){

    $name = $arradata['first_name'] . " " . $arradata['last_name'];
    $email = $arradata['email'];
    $phone = $arradata['phone'];
    $carid = $id;
    
    $message = $_POST['r_msg'];

    $p_insertquery = "insert into review(name, email, review_msg, carid) values('$name', '$email', '$message', '$id')";
    $p_iquery = mysqli_query($con, $p_insertquery);

}

?>
							<div class="car-single-widget">
                                <h5 class="mb-3">Use Price Calculator</h5>
                                <div class="car-single-form">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="price" value="<?php echo $p_res['price'] ?>" placeholder="$ Price">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="rate" value="<?php echo $rate; ?>" readonly placeholder="% Rate">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <select name="loan_period" id="" class="form-control">
                                                <option value="3">3 Months</option>
                                                <option value="6">6 Months</option>
                                                <option value="9">9 Months</option>
                                                <option value="12">12 Months</option>
                                                <option value="16">16 Months</option>
                                            </select>
</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="down_payment" placeholder="$ Down Payment">
                                    </div>
                                    <br>
                                    <button type="submit" name="crate" class="theme-btn">Calculate Now<i class="fas fa-arrow-right-long"></i></button>
                                </form>
                                <hr><br>
                                <h5>
                                <?php 
include("./includes/connection.php");

        if(isset($_POST['crate'])){
            $price = $_POST['price'];
            $rate = $_POST['rate'];
            $loan_period = $_POST['loan_period'];
            $down_payment = $_POST['down_payment'];

            if($p_res['price'] <= $down_payment){
                echo "Down payment is greater than Actual price";
            }else{
                $loanAmount = $price - $down_payment;
                $monthlyInterestRate = $rate / 12 / 100;
                $x = pow(1 + $monthlyInterestRate, -$loan_period);
                $monthlyPayment = $loanAmount * $monthlyInterestRate / (1 - $x);
            
            echo "Your monthly payment is<br> <span style='color: red;'>$" . number_format($monthlyPayment, 2) . "</span>/month";
    
            }

           
        }

       

            ?>
            </h5>

                                	
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- car single end -->
		
		<!-- video area -->
        <div class="video-area pb-120">
            <div class="container-fluid px-0">
				<div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <h2 class="site-title">Car <span>Videos</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="video-content" style="background-image: url(assets/img/video/video.jpg);">
                    <div class="row align-items-left">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video area end -->

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
    <script src="assets/js/flex-slider.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>