<?php include './includes/connection.php'; ?>

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

        <!-- hero slider -->
        <div class="hero-section">
            <div class="hero-slider owl-carousel owl-theme">
                <div class="hero-single" style="background: url(assets/img/slider/slider-1.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                        Lorbek!</h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Best Way To Find Your <span>Dream</span> Car
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        The best way to fulfill your dream is to search online, Lorbek has eveything you need to make your dream come true.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="about.php" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="about.php" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-right">
                                    <div class="hero-img">
                                        <img src="assets/img/slider/hero-1.png" alt="" data-animation="fadeInRight"
                                            data-delay=".25s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background: url(assets/img/slider/slider-2.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                        Lorbek!</h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Best Way To Find Your <span>Dream</span> Car
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        The best way to fulfill your dream is to search online, Lorbek has eveything you need to make your dream come true.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="#" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="#" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-right">
                                    <div class="hero-img">
                                        <img src="assets/img/slider/hero-2.png" alt="" data-animation="fadeInRight"
                                            data-delay=".25s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single" style="background: url(assets/img/slider/slider-3.png)">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-content">
                                    <h6 class="hero-sub-title" data-animation="fadeInUp" data-delay=".25s">Welcome To
                                        Lorbek!</h6>
                                    <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                        Best Way To Find Your <span>Dream</span> Car
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay=".75s">
                                        The best way to fulfill your dream is to search online, Lorbek has eveything you need to make your dream come true.
                                    </p>
                                    <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                        <a href="#" class="theme-btn">About More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                        <a href="#" class="theme-btn theme-btn2">Learn More<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <div class="hero-right">
                                    <div class="hero-img">
                                        <img src="assets/img/slider/hero-3.png" alt="" data-animation="fadeInRight"
                                            data-delay=".25s">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- hero slider end -->


        <!-- find car form -->
        <div class="find-car">
            <div class="container">
                <div class="find-car-form">
                    <h4 class="find-car-title">Let's Find Your Perfect Car</h4>
                    <form action="" method="POST">
                        <div class="row">
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Brand Name</label>
                                    <select class="select" name="brand">
                                        <option value="bmw">BMW</option>
                                        <option value="ferrari">Ferrari</option>
                                        <option value="mercediz">Marcediz Benz</option>
                                        <option value="hundai">Hyundai</option>
                                        <option value="nissan">Nissan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Fuel Type</label>
                                    <select class="select" name="fueltype">
                                        <option value="disel">Disel</option>
                                        <option value="petrol">Petrol </option>
                                        <option value="hybrid">Hybrid</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Choose Year</label>
                                    <select class="select" name="year">
                                        
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Choose Milieage</label>
                                    <select class="select" name="mileage">
                                        <option value="20">2000 Miles</option>
                                        <option value="30">3000 Miles</option>
                                        <option value="40">4000 Miles</option>
                                        <option value="50">5000 Miles</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label>Price Range</label>
                                    <select class="select" name="price">
                                        
                                        <option value="1000-5000">$1,000 - $5,000</option>
                                        <option value="5000-10000">$5,000 - $10,000</option>
                                        <option value="15000-20000">$15,000 - $20,000</option>
                                        <option value="20000-25000">$20,000 - $25,000</option>
                                        <option value="25000-30000">$25,000 - $30,000</option>
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-lg-3 align-self-end">
                                <button class="theme-btn" type="submit" name="submit"><span class="far fa-search"></span> Find Your
                                    Car</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
// Assuming you have already established a MySQL connection
include './includes/connection.php';
// Check if the form is submitted
if(isset($_POST['submit'])){
    // Retrieve form data
    $brand = $_POST['brand'];
    $fueltype = $_POST['fueltype'];
    $year = $_POST['year'];
    $mileage = $_POST['mileage'];
    $price = $_POST['price'];

    
    
        list($minPrice, $maxPrice) = explode('-', $price);
        // $sql .= " AND price BETWEEN '$minPrice' AND '$maxPrice'";
    
        $sql = "select * from cars where brand='$brand' and fueltype='$fueltype' and year='$year'and mileage='$mileage' and price between '$minPrice' and '$maxPrice'";

    // Execute the query
    $result = mysqli_query($con, $sql);

    
}



    ?>
        <!-- findcar form end -->


        <!-- Upcoming and News -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img" >
                                <div>
									<img src="assets/img/about/01.jpeg" alt="">
									
								</div>
                            </div>
                            <div class="about-experience">
                                <div class="about-experience-icon">
                                    <i class="flaticon-car"></i>
                                </div>
                                <b>NEW</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline justify-content-start">
                                    <i class="flaticon-drive"></i> Upcoming Cars &amp; News
                                </span>
                                <h2 class="site-title">
                                    World Best <span>Car Showroom</span> Marketplace.
                                </h2>
                            </div>
                            <p class="about-text">
                                You will find your Dream Car here which you will not find it elsewhere.
                            </p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        Book ahead to be notified of all upciming cars.
                                    </li>
                                    <li>
                                        Loan and repayment management with price calculator.
                                    </li>
                                    <li>
                                        Chat with AI chatbot which is available 24/7 to help with your queries.
                                    </li>
                                </ul>
                            </div>
                            <a href="shop.html" class="theme-btn mt-4">Discover More<i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Upcoming and News end -->


        <!-- car area -->
        <div class="car-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="flaticon-drive"></i> New Arrivals</span>
                            <h2 class="site-title">Let's Check Latest <span>Cars</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">

                <?php 
                       include './includes/connection.php';
                       $p_selectquery = "select * from cars";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                      ?>
                      <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="car-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="car-img">
                                <img src="<?php echo $p_res['image'] ?>" alt="">
                                <div class="car-btns">
                                    <a href="#"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="car-content">
                                <div class="car-top">
                                    <h4><a href="#"><?php echo $p_res['name'] ?></a></h4>
                                    <!-- <div class="car-rate">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <span>5.0 (58.5k Review)</span>
                                    </div> -->
                                </div>
                                <ul class="car-list">
                                    <li><i class="far fa-steering-wheel"></i><?php echo $p_res['transmission'] ?></li>
                                    <li><i class="far fa-road"></i><?php echo $p_res['mileage'] ?>km / 1-litre</li>
                                    <li><i class="far fa-car"></i>Model: <?php echo $p_res['year'] ?></li>
                                    <li><i class="far fa-gas-pump"></i><?php echo $p_res['fueltype'] ?></li>
                                </ul>
                                <div class="car-footer">
                                    <span class="car-price">$<?php echo $p_res['price'] ?></span>
                                    <a href="car-profile.php?id=<?php echo $p_res['id'] ?>" class="theme-btn"><span class="far fa-eye"></span>Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                      




<?php } ?>
                </div>
                <div class="text-center mt-4">
                    <a href="shop.php" class="theme-btn">Load More <i class="far fa-arrow-rotate-right"></i> </a>
                </div>
            </div>
        </div>
        <!-- car area end -->


        <!-- car category -->
        <div class="car-category py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="flaticon-drive"></i> Car Category</span>
                            <h2 class="site-title">Car By Body <span>Types</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="category-img">
                                <img src="assets/img/category/sedan.jpg" alt="">
                            </div>
                            <h5>Sedan</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="category-img">
                                <img src="assets/img/category/compact.jpg" alt="">
                            </div>
                            <h5>Compact</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="category-img">
                                <img src="assets/img/category/convertible.jpg" alt="">
                            </div>
                            <h5>Convertible</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1s">
                            <div class="category-img">
                                <img src="assets/img/category/SUV.jpg" alt="">
                            </div>
                            <h5>SUV</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.25s">
                            <div class="category-img">
                                <img src="assets/img/category/crossover.jpg" alt="">
                            </div>
                            <h5>Crossover</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.50s">
                            <div class="category-img">
                                <img src="assets/img/category/wagon.jpeg" alt="">
                            </div>
                            <h5>Wagon</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".25s">
                            <div class="category-img">
                                <img src="assets/img/category/sports.jpg" alt="">
                            </div>
                            <h5>Sports</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".50s">
                            <div class="category-img">
                                <img src="assets/img/category/pickup.jpeg" alt="">
                            </div>
                            <h5>Pickup</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay=".75s">
                            <div class="category-img">
                                <img src="assets/img/category/family.jpg" alt="">
                            </div>
                            <h5>Family MPV</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1s">
                            <div class="category-img">
                                <img src="assets/img/category/coupe.jpg" alt="">
                            </div>
                            <h5>Coupe</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.25s">
                            <div class="category-img">
                                <img src="assets/img/category/electric.jpg" alt="">
                            </div>
                            <h5>Electric</h5>
                        </a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <a href="#" class="category-item wow fadeInUp" data-wow-delay="1.50s">
                            <div class="category-img">
                                <img src="assets/img/category/luxury.jpg" alt="">
                            </div>
                            <h5>Luxury</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- car category end-->


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


        <!-- testimonial area -->
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline"><i class="flaticon-drive"></i> Testimonials</span>
                            <h2 class="site-title">What Our Client <span>Say's</span></h2>
                            <div class="heading-divider"></div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/user1.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Paul Smith</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                I had a best experience at this showroom. Great service and huge range of cars selection. Best in town!
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/user2.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Yumiyo Yuki</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                I had a best experience at this showroom. Great service and huge range of cars selection. Best in town!
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/user3.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Bunny Banner</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                I had a best experience at this showroom. Great service and huge range of cars selection. Best in town!
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/user4.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Park Yong</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                I had a best experience at this showroom. Great service and huge range of cars selection. Best in town!
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="assets/img/testimonial/user5.jpg" alt="">
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Neil Horan</h4>
                                <p>Customer</p>
                            </div>
                        </div>
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="flaticon-quote"></i></span>
                            <p>
                                I had a best experience at this showroom. Great service and huge range of cars selection. Best in town!
                            </p>
                        </div>
                        <div class="testimonial-rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial area end -->
		
		
		<!-- Enquire area -->
		<div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left wow fadeInLeft" data-wow-delay=".25s">
                            <div class="about-img" >
                                <div>
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805202.1123258973!2d144.39375731152742!3d-37.96964323843963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC!5e0!3m2!1sen!2sau!4v1705281951286!5m2!1sen!2sau" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right wow fadeInRight" data-wow-delay=".25s">
                            <div class="site-heading mb-3">
                                <h2 class="site-title">
                                    Enquire Now!
                                </h2>
                            </div>
                            <form action="" method="POST">
                            <div class="form-group">
                                
                                <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                </div><br>
                                <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                </div><br>
                                <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone">
                                </div><br>
                            	<textarea name="message" cols="30" rows="5" class="form-control" placeholder="Write Your Message..."></textarea>
                            </div>
                            <button type="submit" name="submit" class="theme-btn mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
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
                    
                     location.href = "index.php";
                 </script>

               <?php
          }else{
            echo "string";
          }
          
    }     
  ?>

    
	<!-- chatbot -->
	<button class="open-btn" onclick="openChatWindow()"><i class="fa fa-comment"> </i> Chat</button>
	<div class="chat-popup" id="chat-form-container">
        <form action="#" class="form-container">
            <div class="chat-window-head">
                <h4><i class="fa fa-comment" ></i> Chat Window</h4>
                <span class="close-btn" onclick="closeChatWindow()">
                    <i class="fa fa-times"></i>
                </span>
            </div>

            <style>

                .msg-container{
                    overflow-y: auto;
                }
                .botmsg{
                    background: #e00a0a;
                    color: #fff;
                    padding: 10px;
                    border-radius: 10px;
                    width: 80%;
                    float: left;
                    margin-top: 10px;
                    transition: all 1s ease;
                }

                .usermsg{
                    background: #f2f2f2;
                    padding: 10px;
                    border-radius: 10px;
                    width: 80%;
                    float: right;
                    margin-top: 10px;
                    transition: all 1s ease;
                }
            </style>
            <div class="msg-container" id="chat-box">
                <div class="botmsg">
                    <span>Hi, How can i help you?</span>
                </div>
                
            </div>

            <div class="chat-box-container">
				<div class="chat-box">
					<input type="text" id="user-input" placeholder=" Type your message.." autocomplete="off" autofocus="autofocus"  required>
					<button onclick="sendMessage()" type="submit" class="btn" style="background: #e00a0a; "><i class="fa fa-send"> </i></button>
				</div>
			</div>
		</form>
    </div>

    <!-- <div id="chat-container">
        <div id="chat-box"></div>
        <input type="text" id="user-input" placeholder="Type your message...">
        <button id="send-btn">Send</button>
    </div> -->



    <script>
        const chatBox = document.getElementById('chat-box');
        const userInput = document.getElementById('user-input');
        const sendBtn = document.getElementById('send-btn');

        sendBtn.addEventListener('click', () => {
            sendMessage();
        });

        userInput.addEventListener('keydown', (e) => {
            if (e.keyCode === 13) {
                sendMessage();
            }
        });

        function sendMessage() {
            const userMessage = userInput.value;
            if (userMessage.trim() === '') return;

            displayMessage(userMessage, 'usermsg');
            respondToUser(userMessage);
            userInput.value = '';
        }

        function displayMessage(message, sender) {
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', sender);
            messageElement.innerHTML = message;
            chatBox.appendChild(messageElement);
            chatBox.scrollTop = chatBox.scrollHeight;
        }

        function respondToUser(message) {
            const keywords = {
                'hello': 'Hi, How can I help you?',
                'hi': 'Hello, How can I help you?',
                'book': 'Sure, we can help you with booking. What would you like to book? <br/><a href="appointment.php">click here</a> if you want to book appoinment',
                'booking': 'Sure, we can help you with booking. What would you like to book? <br/><a href="appointment.php">click here</a> if you want to book appoinment',
                'loan': 'Yes, we offer loans. Can you provide more details about the type of loan you are interested in?',
                'car': 'Certainly, we have a variety of cars available. What make and model are you looking for? <br/>To check our cars <a href="shop.php">click here</a>'
            };

            let response = 'I\'m sorry, I couldn\'t understand that. Can you please be more specific? Or You can send enquiry message to our manager';

            Object.keys(keywords).forEach(keyword => {
                if (message.toLowerCase().includes(keyword)) {
                    response = keywords[keyword];
                }
            });

            displayMessage(response, 'botmsg');
        }
    </script>


    <!-- chatbot end -->

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
    <script src="assets/js/chatbot.js"></script>

</body>

</html>