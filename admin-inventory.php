<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>Lorbek Cars Showroom | Admin Dashboard</title>
	
	<!-- Fonts -->
	<link rel="stylesheet" href="assets/css/all-fontawesome.min.css">
	<!-- Style css -->
    <link href="assets/css/admin.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/admin-inventory.css">
    
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="admin-dashboard.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<img src="assets/img/logo/logo-light.png" height="80" width="150" alt="logo">
				</svg>
				
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Admin Car Inventory
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="assets/img/testimonial/user5.jpg" width="56" alt="">
								</a>
								
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include('./includes/admin-sidebar.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <main class="main">


        <!-- car area -->
        <div class="car-area list bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        
                    </div>
                    <div class="col-lg-9">
                        <div class="col-md-12">
                            <div class="car-sort">
                                
                                <div class="car-sort-list-grid">
                                    <a class="car-sort-list active" href="#"><i class="far fa-list-ul"></i></a>
                                </div>
								<div class="nav-right-btn mt-2">
                                	<a href="add-car.php" class="theme-btn"><span class="far fa-plus-circle"></span>Add Car</a>
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
                            <div class="col-md-6 col-lg-12">
                                <div class="car-item">
									<!-- <input class="form-check-input" type="checkbox" id="update-car"> -->
                                    <div class="car-img">
										
                                        <img src="<?php echo $p_res['image']; ?>" alt="">
                                        
                                    </div>
                                    <div class="car-content">
                                        <div class="car-top">
                                            <h4><a href="#"><?php echo $p_res['name']; ?></a></h4>
                                            
                                            
                                        </div>
                                        <ul class="car-list">
                                            <li><i class="far fa-steering-wheel"></i><?php echo $p_res['transmission']; ?></li>
                                            <li><i class="far fa-road"></i><?php echo $p_res['mileage']; ?> / 1-litre</li>
                                            <li><i class="far fa-car"></i>Model: <?php echo $p_res['year']; ?></li>
                                            <li><i class="far fa-gas-pump"></i><?php echo $p_res['fueltype']; ?></li>
                                        </ul>
                                        <p>
                                        <?php echo $p_res['description']; ?>
                                        </p>
                                        <div class="car-footer">
                                            <span class="car-price">$<?php echo $p_res['price']; ?></span>
                                           
                                            <div>
                                            <a href="edit-car.php?id=<?php echo $p_res['id']; ?>" class="theme-btn"><span class="far fa-pencil"></span>Edit</a>
                                            <a href="./scripts/delete-car-script.php?id=<?php echo $p_res['id']; ?>" class="theme-btn"><span class="far fa-trash"></span>Delete</a>
                                            </div>
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
        <!--**********************************
            Content body end
        ***********************************-->
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">Lorbek</a> All Rights Reserved.</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
	</div>
  

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="assets/js/global.min.js"></script>
	<script src="assets/js/Chart.bundle.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="assets/js/apexchart.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="assets/js/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="assets/js/dashboard-1.js"></script>
	
    <script src="assets/js/custom.min.js"></script>
	<script src="assets/js/dlabnav-init.js"></script>

</body>
</html>