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
                                Admin Dashboard
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
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									
									<!-- <div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="fs-20 font-w700 mb-2">Overall Statistics</h4>
												<div class="d-flex align-items-center project-tab mb-2">	
													<div class="card-tabs mt-3 mt-sm-0 mb-3 ">
														<ul class="nav nav-tabs" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#monthly" role="tab">Monthly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Weekly" role="tab">Weekly</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#Today" role="tab">Today</a>
															</li>
														</ul>
													</div>
												</div>	
											</div>
											<div class="card-body">
												<div class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1" data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">Total Sales</span>
														</div>
													</div>
													<div class="d-flex">	
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D"></circle>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">246</h4>
																<span class="fs-16 font-w400 d-block">Sold</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7"></circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">28</h4>
																<span class="fs-16 font-w400 d-block">New Customer</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="monthly">
														<div id="chartBar" class="chartBar"></div>
													</div>	
													<div class="tab-pane fade" id="Weekly">
														<div id="chartBar1" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Today">
														<div id="chartBar2" class="chartBar"></div>
													</div>
												</div>
												<div class="d-flex align-items-center">
													<label class="form-check-label font-w400 fs-16 mb-0" for="flexSwitchCheckChecked1">Number</label>
													<div class="form-check form-switch toggle-switch">
														<input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked1" checked="">
													 
													</div>
													<label class="form-check-label font-w400 fs-16 mb-0 ms-3" for="flexSwitchCheckChecked2">Analytics</label>	
													<div class="form-check form-switch toggle-switch">
													  <input class="form-check-input custome" type="checkbox" id="flexSwitchCheckChecked2" checked="">
													</div>
												</div>
											</div>
										</div>
									</div> -->
									<!-- <div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="fs-20 font-w700 mb-0">Total Revenue</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5"></circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5"></circle>
														</svg>
													</div>
													
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div> -->
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Recent Orders</h4>
												</div>
												<div>
													<a href="javascript:void(0);" class="btn btn-outline-primary btn-rounded fs-18">View More</a>
												</div>
											</div>
											<div class="details">
                								<div class="recentOrders">
                    								<table>
                        								<thead>
                            								<tr>
                                								<td>Name</td>
                                								<td>Price</td>
                                								<td>Payment</td>
                                								<td>Status</td>
                            								</tr>
                        								</thead>
                        								<tbody>
														<?php 
                       include './includes/connection.php';
                       $p_selectquery = "select * from carts where status=2";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                        $userid = $p_res['user_id'];

                        $u_selectquery = "select * from users where id=$userid";
                       $u_query = mysqli_query($con, $u_selectquery);
                         $i = 0;
                       while($u_res = mysqli_fetch_array($u_query)){

                      ?>
                            								<tr>
                                								<td><?php echo $p_res['name']; ?></td>
                                								<td>$<?php echo $p_res['price']; ?></td>
                                								<td><?php echo $p_res['status'] == '2' && $p_res['status'] != '0' ? 'paid' : 'pending' ?></td>
                                								<td><?php echo $p_res['status'] == '2' && $p_res['status'] != '0' ? '<span class="status delivered">Delivered</span>' : '<span class="status pending">Pending</span>' ?></td>
                            								</tr>
															<?php } } ?>
                            								
                            								
                        								</tbody>
                    								</table>
                								</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4 pb-0 justify-content-between">
														<div>
															<h4 class="fs-18 font-w600 mb-4 text-nowrap">New Orders</h4>
															<div class="d-flex align-items-center">
															<?php 
                            
                            
                            $cartquery = "select * from carts where status=2";
                            $cart = mysqli_query($con, $cartquery);
                            $cartcount = mysqli_num_rows($cart);
                            ?>

																<h2 class="fs-32 font-w700 mb-0"><?php echo $cartcount ?></h2>
																<span class="d-block ms-4">
																	
																	
																</span>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body px-4 pb-0">
														<h4 class="fs-18 font-w600 mb-5 text-nowrap">New Customers</h4>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only"></span>
															</div>
														</div>
														<?php 
                            
                            
                            $cartquery = "select * from users where status=0";
                            $cart = mysqli_query($con, $cartquery);
                            $cartcount = mysqli_num_rows($cart);
                            ?>
														<div class="d-flex align-items-end mt-2 pb-3 justify-content-between">
															<span><?php echo 100 - $cartcount; ?> left from target</span>
															<h4 class="mb-0"><?php echo $cartcount; ?></h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
															<?php 
                            
                            
                            $cartquery = "select * from carts where status=2";
                            $cart = mysqli_query($con, $cartquery);
                            $cartcount = mysqli_num_rows($cart);
							$tsale = 0;
							while($c = mysqli_fetch_array($cart)){
								$tsale = $tsale + $c['quantity'] * $c['price'];
							}
                            ?>
															
																<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Sales</h4>
																<h2 class="fs-32 font-w700">$<?php echo $tsale; ?></h2>
																
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
															<?php 
                            
                            
                            $cartquery = "select * from cars";
                            $cart = mysqli_query($con, $cartquery);
                            $cartcount = mysqli_num_rows($cart);
                            ?>

																<h4 class="fs-18 font-w600 mb-4 text-nowrap">New Cars</h4>
																<h2 class="fs-32 font-w700"><?php echo $cartcount;?></h2>
																
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									
									
									<div class="col-xl-12 col-lg-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">New Customers</h4>
												</div>
												
											</div>
											<div class="card-body px-0">

											<?php 
											
											$p_selectquery = "select * from users where status=0";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                      ?>



												<div class="msg-bx d-flex justify-content-between align-items-center">
													<div class="msg d-flex align-items-center w-100">
														<div class="image-box active">
															<img src="assets/img/testimonial/user2.jpg" alt="">
														</div>
														<div class="ms-3 w-100 ">
															<h4 class="fs-18 font-w600"><?php echo $p_res['first_name'] . " " . $p_res['last_name']; ?></h4>
														</div>
														
													</div>
													
												</div>

												<?php } ?>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
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