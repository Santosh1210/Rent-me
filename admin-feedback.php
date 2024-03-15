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
                                Admin Feedback Management
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


        <!-- user-profile -->
        <div class="user-profile py-120">
            <div class="container">
                <div class="row">
					<div class="col-lg-2">
                        
                    </div>
                    <div class="col-lg-10">
                        <div class="user-profile-wrapper">
                            <div class="user-profile-card profile-ad">
                                <div class="user-profile-card-header">
                                    <h4 class="user-profile-card-title">Feedback Lists</h4>
                                    <div class="user-profile-card-header-right">
                                       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Feedback ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Query</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            <?php 
                       include './includes/connection.php';
                       $p_selectquery = "select * from enquiry";
                       $p_query = mysqli_query($con, $p_selectquery);
                         $i = 0;
                       while($p_res = mysqli_fetch_array($p_query)){
                        $i = $i+1;

                      ?>


                                                <tr>
                                                    <td>
                                                        <div class="table-list-info">
                                                            <a href="#">
																<!-- <input class="form-check-input" type="checkbox" id="customer1"> -->
                                                                <div class="table-list-content">
                                                                    <span>ID: #<?php echo $p_res['id']; ?></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td><?php echo $p_res['name']; ?></td>
                                                    <td><?php echo $p_res['email']; ?></td>
                                                    <td><?php echo $p_res['message']; ?></td>
                                                    <td>
                                                    
                                                        <a href="#" onclick="openGmailCompose(); return false;" class="btn btn-outline-danger btn-sm rounded-2" data-bs-toggle="tooltip" title="Delete"><i class="far fa-reply"></i> Reply</a>
                                                    </td>
                                                </tr>
                                                <script>
                                                    function openGmailCompose() {
                                                        var recipient = "<?php echo $p_res['email']; ?>";
                                                        var subject = "Reply to <?php echo $p_res['name']; ?>";
                                                        var body = "Query: <?php echo $p_res['message']; ?>. Reply: ";
                                                        var url = "https://mail.google.com/mail/?view=cm&to=" + encodeURIComponent(recipient) + "&su=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);
                                                        window.open(url, "Compose Email", "width=600,height=400");
                                                    }
                                                </script>

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