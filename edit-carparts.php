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
							<li class="nav-item d-flex align-items-center">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="fa fa-search"></i></a></span>
								</div>
							</li>
							
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"></path>
										<path d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z" fill="#717579"></path>
									</svg>
                                </a>
                            </li>
							
							
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link " href="javascript:void(0);" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.1666 5.83331H20.9999V3.49998C20.9999 3.19056 20.877 2.89381 20.6582 2.67502C20.4394 2.45623 20.1427 2.33331 19.8333 2.33331C19.5238 2.33331 19.2271 2.45623 19.0083 2.67502C18.7895 2.89381 18.6666 3.19056 18.6666 3.49998V5.83331H9.33325V3.49998C9.33325 3.19056 9.21034 2.89381 8.99154 2.67502C8.77275 2.45623 8.47601 2.33331 8.16659 2.33331C7.85717 2.33331 7.56042 2.45623 7.34163 2.67502C7.12284 2.89381 6.99992 3.19056 6.99992 3.49998V5.83331H5.83325C4.90499 5.83331 4.01476 6.20206 3.35838 6.85844C2.702 7.51482 2.33325 8.40506 2.33325 9.33331V10.5H25.6666V9.33331C25.6666 8.40506 25.2978 7.51482 24.6415 6.85844C23.9851 6.20206 23.0948 5.83331 22.1666 5.83331Z" fill="#717579"></path>
										<path d="M2.33325 22.1666C2.33325 23.0949 2.702 23.9851 3.35838 24.6415C4.01476 25.2979 4.90499 25.6666 5.83325 25.6666H22.1666C23.0948 25.6666 23.9851 25.2979 24.6415 24.6415C25.2978 23.9851 25.6666 23.0949 25.6666 22.1666V12.8333H2.33325V22.1666Z" fill="#717579"></path>
									</svg>
                                </a>
							</li>
							
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="assets/img/testimonial/user5.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="admin-dashboard.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="admin-inventory.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inventory </span>
									</a>
									<a href="login.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
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

        <?php 

    include './includes/connection.php';
    $id = $_GET['id'];
    $p_selectquery = "select * from carparts where id = '$id'";
    $p_query = mysqli_query($con, $p_selectquery);
    $p_res = mysqli_fetch_array($p_query);
?>


        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
            <div class="login-area">
            <div class="container">
                <div class="col-md-10 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <p>Edit Car Part</p>
                        </div>
                        <form action="" method="POST" novalidate enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Car Name</label>
                                <input type="text" name="partname" class="form-control" value="<?php echo $p_res['name'] ?>" placeholder="Part name">
                            </div>
                            <div class="d-flex">
                            <div class="form-group col-md-5">
                                <label>Price</label>
                                <input type="text" name="partprice" class="form-control" value="<?php echo $p_res['price'] ?>" placeholder="Part price">
                            </div>
                            <div class="form-group col-md-5" style="margin-left: 50px;">
                                <label>Image</label>
                                <input type="file" name="partimage" class="form-control" placeholder="Part image">
                            </div>

                            </div>
                            
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="partdesc" class="form-control" placeholder="Part description" cols="30" rows="40" value="<?php echo $p_res['description'] ?>"><?php echo $p_res['description'] ?></textarea>
                            </div>
                            
                            <div class="d-flex align-items-center">
                                <button type="submit" name="submit" class="theme-btn"><i class="far fa-sign-in"></i> Edit Car Parts</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>



        <?php 

         
         if(isset($_POST['submit'])){
            $partname = $_POST['partname'];
            $partprice = $_POST['partprice'];
            $partimage = $_FILES['partimage'];
            $partdesc = $_POST['partdesc'];

            $p_filename = $partimage['name'];
            
            $p_filepath = $partimage['tmp_name'];
            $p_fileerror = $partimage['error'];
            if($p_fileerror ==0){ 

            $p_destfile = './upload/'.$p_filename;
            $r_destfile = './upload/'.$p_filename;
  

           move_uploaded_file($p_filepath,  $p_destfile);

          $p_insertquery = "update carparts set name='$partname', price='$partprice', image='$p_destfile',  description='$partdesc' where id=$id";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

               ?>
                 <script type="text/javascript">
                     location.href = "admin-carparts-inventory.php";
                 </script>

               <?php
          }else{
            echo "string";
          }
        }else{
           
            $image = $p_res['image'];
          $p_insertquery = "update carparts set name='$partname', price='$partprice', image='$image',  description='$partdesc' where id=$id";
          $p_iquery = mysqli_query($con, $p_insertquery);

          if($p_iquery){

               ?>
                 <script type="text/javascript">
                     location.href = "admin-carparts-inventory.php";
                 </script>

               <?php
          }else{
            echo "string";
          }
        }  
    }     
  ?>





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