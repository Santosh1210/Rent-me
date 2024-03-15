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

        <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/lorbek.png)">
            <div class="container">
                <h2 class="breadcrumb-title">Car Parts Inventory</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Car Parts Inventory</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->



        <!-- car area -->
        <div class="car-area grid bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                    <div class="car-sidebar">
                            <div class="car-widget">
                                <div class="car-search-form">
                                    <h4 class="car-widget-title">Search</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Search" name="searchT">
                                            <button type="submit" name="search"><i class="far fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                            <div class="car-widget">
                                <h4 class="car-widget-title">Price Range</h4>
                                <form action="" method="POST">
                                <div class="price-range-box">
                                    <div class="price-range-input">
                                        <input type="text" id="price-amount" name="price_amount" min="10" max="1000" readonly>
                                    </div>
                                    <div class="price-range"></div>
                                </div>
                                <br>
                                <button type="submit" class="theme-btn" name="price">Apply</button>
                                </form>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="col-md-12">
                            <div class="car-sort">
                               
                                <div class="car-sort-list-grid">
                                    <a class="car-sort-grid active"><i
                                            class="far fa-grid-2"></i></a>
                                </div>
                                <div class="col-md-3 car-sort-box">
                                <form method="POST">
                                    <select class="select" name='sort' onchange='this.form.submit();'>
                                    <option value="highest">Sort By Price</option>
                                        <option value="lowest">Sort By Low Price</option>
                                        <option value="highest">Sort By High Price</option>
                                    </select>
</form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                       



                        <?php
// Assuming you have a database connection established
include './includes/connection.php';
// Check if form is submitted
if(isset($_POST['search'])){
    $search = $_POST['searchT'];
      $p_selectquery = "select * from carparts where name like '$search%' ";
  }else if(isset($_POST['price'])){
    $price_amount = $_POST['price_amount'];

    $price_amount = str_replace('$', '', $price_amount);
$price_amount = str_replace(' ', '', $price_amount);

// Split the string into an array using the "-" delimiter
$amounts = explode('-', $price_amount);

// Extract the minimum and maximum amounts
$min_amt = isset($amounts[0]) ? intval($amounts[0]) : null;
$max_amt = isset($amounts[1]) ? intval($amounts[1]) : null;

    // Now you can use $price_amount as needed
    $p_selectquery = "SELECT * FROM carparts WHERE price BETWEEN $min_amt AND $max_amt";

}else if(isset($_POST['sort'])){
    if($_POST['sort']==="highest"){
         $p_selectquery = "select * from carparts order by price desc";
    }else{
        $p_selectquery = "select * from carparts order by price asc";

    }
}else{
    $p_selectquery = "select * from carparts";
}


$p_query = mysqli_query($con, $p_selectquery);
  $i = 0;
  


                       
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                      ?>


                            <div class="col-md-6 col-lg-4">
                                <div class="car-item">
                                    <div class="car-img" style="text-align: center;">
                                        <img src="<?php echo $p_res['image'] ?>" alt="">
                                    </div>
                                    <div class="car-content">
                                        <div class="car-top">
                                            <h4><a href="#"><?php echo $p_res['name'] ?></a></h4>
                                            
                                        </div>
                                       
                                        <div class="car-footer">
                                            <span class="car-price">$<?php echo $p_res['price'] ?></span>
                                            <a href="carparts-profile.php?id=<?php echo $p_res['id'] ?>" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php } ?>
                        </div>
                        <!-- pagination -->
                      
                        <!-- pagination end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- car area end -->

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
    <!-- footer area end --




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