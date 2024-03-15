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

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/Lorbek.png)">
            <div class="container">
                <h2 class="breadcrumb-title">My Orders</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">My Orders</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->


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
                                <li><a href="profile.php"><i class="far fa-gauge-high"></i> My Profile</a></li>
                                <li><a class="active" href="profile-order.php"><i class="far fa-user"></i> My Orders</a></li>
								<li><a href="shop.php"><i class="far fa-shopping-cart"></i> Shop Now</a></li>
                                <li><a href="change-password.php"><i class="far fa-lock"></i>Change Password</a></li>
                                <li><a href="./scripts/logout-script.php"><i class="far fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card profile-ad">
                                <div class="user-profile-card-header">
                                    <h4 class="user-profile-card-title">My Orders</h4>
                                    <div class="user-profile-card-header-right">
                                        <div class="user-profile-search">
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Name</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
													<th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php 

include './includes/connection.php';

$uid = $_SESSION['id'];
$p_selectquery = "select * from carts where user_id=$uid and status='2'";
$p_query = mysqli_query($con, $p_selectquery);
  $i = 0;

  $total_cost = 0;
while($p_res = mysqli_fetch_array($p_query)){
 $i = $i+1;
 $total_cost = $total_cost + $p_res['price'] * $p_res['quantity']

?>

                                                <tr>
                                                    <td>
                                                        <div class="table-list-info">
                                                            <a href="#">
                                                                <img src="<?php echo $p_res['image']; ?>" alt="">
                                                                <div class="table-list-content">
                                                                    <span>Order ID: #<?php echo $p_res['id']; ?></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $p_res['name']; ?></td>
                                                    <td><?php echo $p_res['quantity']; ?></td>
                                                    <td>$<?php echo $p_res['price']; ?></td>
                                                    <td><span class="badge badge-success">Confirmed</span></td>
                                                   
                                                </tr>
                                                <?php } ?>



                                                <?php 

include './includes/connection.php';


$p2_selectquery = "select * from carts where user_id=$uid and status='1'";
$p2_query = mysqli_query($con, $p2_selectquery);
 
while($p2_res = mysqli_fetch_array($p2_query)){
 

?>

                                                <tr>
                                                    <td>
                                                        <div class="table-list-info">
                                                            <a href="#">
                                                                <img src="<?php echo $p2_res['image']; ?>" alt="">
                                                                <div class="table-list-content">
                                                                    <span>Order ID: #<?php echo $p2_res['id']; ?></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $p2_res['name']; ?></td>
                                                    <td><?php echo $p2_res['quantity']; ?></td>
                                                    <td>$<?php echo $p2_res['price']; ?></td>
                                                    <td><span class="badge badge-danger">Loan Confirmation Pending</span></td>
                                                   
                                                </tr>
                                                <?php } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- pagination -->
                                    <div class="pagination-area">
                                        <div aria-label="Page navigation example">
                                            <ul class="pagination my-3">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="far fa-angle-double-left"></i></span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="far fa-angle-double-right"></i></span>
                                                    </a>
                                                </li>
                                            </ul>
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