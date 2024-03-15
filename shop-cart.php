<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <script href="./includes/jquery.js"></script>

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

            <?php 
            include './includes/connection.php';
            
            
                       
                       $uid = $_SESSION['id'];
                       $p_selectquery = "select * from carts where user_id=$uid and status='0'";
                       $p_query = mysqli_query($con, $p_selectquery);
                       $count = mysqli_num_rows($p_query);

                       if($count==0){
                        ?>
                        <div style="text-align: center;">
                        <i class="fal fa-shopping-cart" style="font-size: 150px; color: #f2f2f2;"></i>
                        <h3>Your cart is empty</h3><br>
                        <a href="shop.php" class="theme-btn">Continue Shopping...</a>
                        </div>
                        

                        <?php
                       }else{

                        ?>

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

                            <?php 

                       include './includes/connection.php';
                       
                       $uid = $_SESSION['id'];
                       $p_selectquery = "select * from carts where user_id=$uid and status='0'";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;

                         $total_cost = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;
                        $total_cost = $total_cost + $p_res['price'] * $p_res['quantity']

                      ?>


                                <tr>
                                    <td>
                                        <div class="cart-img">
                                            <img src="<?php echo $p_res['image']; ?>" alt="">
                                        </div>
                                    </td>
                                    <td>
                                        <h5> <?php echo $p_res['name']; ?></h5>
                                    </td>
                                    <td>
                                        <div class="cart-price">
                                            <span>$<?php echo $p_res['price']; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="cart-qty">
                                            <button class="minus-btn" onclick="dec()"><i class="fal fa-minus"></i></button>
                                            <input class="quantity" type="text" value="1" disabled="">
                                            <button class="plus-btn" onclick="inc()"><i class="fal fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="cart-sub-total">
                                            <span>$<?php echo $p_res['price'] * $p_res['quantity'] ; ?> </span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="./scripts/delete-from-cart.php?id=<?php echo $p_res['id'] ?> " class="cart-remove"><i class="far fa-times"></i></a>
                                    </td>
                                </tr>

                                <?php } ?>
                               
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
                                        <li class="cart-total"><strong>Total:</strong> <span>$<?php echo $total_cost; ?></span></li>
                                    </ul>
                                    <div class="text-end mt-40">
                                        <a href="shop-checkout-bank.php?amount=<?php echo $total_cost; ?>" class="theme-btn">Proceed to Payment<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                    <div class="text-end mt-40">
                                        <a href="profile-loan.php?amount=<?php echo $total_cost; ?>" class="theme-btn">Request for Loan<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                     <div class="text-end mt-40">
                                        <a href="shop.php" class="theme-btn">Continue Shopping<i
                                                class="fas fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="car-single-widget">
                                <h5 class="mb-3">Use Price Calculator</h5>
                                <div class="car-single-form">
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="price" value="<?php echo $total_cost ?>" placeholder="$ Price">
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

            if($total_cost <= $down_payment){
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








<?php
                       }
            
            ?>
                
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

    <script type="text/javascript">
     
    function updcart(id){

        location.reload(true);
        $.ajax({
            url: "update-cart.php",
            type: "POST",
            data:$("#frm"+id).serialize(),
            success:function(res){

            }

        })
    }
 </script>




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