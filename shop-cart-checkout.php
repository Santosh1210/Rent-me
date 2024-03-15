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
    <title>Lorbek - Shopping Cart</title>

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
    <header class="header">
        <div class="main-navigation">
            <nav class="navbar navbar-expand-lg">
                <div class="container position-relative">
                    <a href="index.html" class="navbar-brand">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </a>
                    <div class="mobile-menu-right">
                        <div class="search-btn">
                            <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-mobile-icon"><i class="far fa-bars"></i></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main_nav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link active" href="index.html" data-bs-toggle="">Home</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link " href="car-profile.html">Car Profile</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" data-bs-toggle="dropdown">Shop</a>
                                <ul class="dropdown-menu fade-down">
                                    <li><a class="dropdown-item" href="shop.html">Shop Now</a></li>
                                    <li><a class="dropdown-item" href="shop-cart.html">Shop Cart</a></li>
                                    <li><a class="dropdown-item" href="shop-cart-checkout.html">Shop Checkout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="book-appointment.html">Book Appointment</a></li>
							<li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu fade-down">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">My Account</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                                            <li><a class="dropdown-item" href="profile-order.html">My Orders</a></li>
                                            <li><a class="dropdown-item" href="profile-loan.html">Loan</a></li>
                                            <li><a class="dropdown-item" href="profile-favorite.html">My Favorites</a></li>
                                            <li><a class="dropdown-item" href="shop.html">Shop Now</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="login.html">Login</a></li>
                                            <li><a class="dropdown-item" href="register.html">Register</a></li>
                                            <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                        <div class="nav-right">
                            <div class="search-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-search"></i></button>
                            </div>
                            <div class="cart-btn">
                                <a href="shop-cart.html" class="nav-right-link"><i class="far fa-cart-plus"></i><span>0</span></a>
                            </div>
							<div class="login-btn">
                                <a href="login.html" class="nav-right-link"><i class="far fa-user-alt"></i></a>
                            </div>
                            <div class="sidebar-btn">
                                <button type="button" class="nav-right-link"><i class="far fa-bars-sort"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- search area -->
                    <div class="search-area">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Type Keyword...">
                                <button type="submit" class="search-icon-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- search area end -->
                </div>
            </nav>
        </div>
    </header>
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

        <!-- shopping cart -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/Lorbek.png)">
            <div class="container">
                <h2 class="breadcrumb-title">Shop Cart</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Shop Cart</li>
                </ul>
            </div>
        </div>
        <!-- Shopping Cart end -->


        <!-- shop cart -->
        <div class="shop-cart py-120">
            <div class="container">
                <div class="shop-cart-wrapper">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="cart-img">
                                            <img src="assets/img/shop/Tyres.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5> MUD Terrian Tyres</h5>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            <span>$1,768</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-qty">
                                            <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                            <input class="quantity" type="text" value="4" disabled="">
                                            <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-sub-total">
                                            <span>$1,768 </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart-img">
                                            <img src="assets/img/shop/fuel injector.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5>Fuel Injector (4 Pack)</h5>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            <span>$769</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-qty">
                                            <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" disabled="">
                                            <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-sub-total">
                                            <span>$759</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="cart-img">
                                            <img src="assets/img/car/audi.jpg" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5> Honda Civic 2021</h5>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            <span>$11,500</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-qty">
                                            <button class="minus-btn"><i class="fal fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" disabled="">
                                            <button class="plus-btn"><i class="fal fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-sub-total">
                                            <span>$11,500</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="cart-remove"><i class="far fa-times"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-footer">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="cart-coupon">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-8">
                                <div class="cart-summary">
                                    <ul>
                                        <li><strong>Sub Total:</strong> <span>$14,027.00</span></li>
                                        <li><strong>Vat:</strong> <span>$151.00</span></li>
                                        <li><strong>Discount:</strong> <span>$-450.00</span></li>
                                        <li><strong>Add Insurance : </strong><span> $0.0</span><button class="plus-btn"><i class="fal fa-plus"></i></button></li>
                                        <li class="cart-total"><strong>Total:</strong> <span>$13,728.00</span></li>
                                    </ul>
                                     <div class="text-end mt-40">
                                        <a href="shop-checkout-bank.html" class="theme-btn">Bank Payment<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                     <div class="text-end mt-40">
                                        <a href="shop-checkout-credit.html" class="theme-btn">Add Credit/Debit Card<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- shop cart end -->

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