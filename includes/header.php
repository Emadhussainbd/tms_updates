<?php 
session_start();
error_reporting(0);
include('includes/db.php');
?>

<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="20x20">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link href='assets/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">


<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!--- /top-header ---->
<!--- header ---->
<header>
	<div class="header-area header-style-two">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
					<div class="nav-logo d-flex justify-content-between align-items-center">
						<a href="index.php"><img src="assets/images/logo-w.png" alt="logo" width="272px"></a>
						<div class="mobile-menu d-flex ">
							<div class="d-flex align-items-center">
								<div class="nav-right-icons d-xl-none d-flex align-items-center ">
									<div class="user-dropdown">
										<i class='bx bx-user-circle'></i>
										<ul class="user-drop-list">
											<li><a href="profile.php">My Account</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="registration.php">Registration</a></li>
											<li><a href="admin/index.php" target="_blank">Admin Lgoin</a></li>
										</ul>
									</div>
									<div class="category-toggle"><i class='bx bx-category'></i></div>
								</div>
								<a href="javascript:void(0)" class="hamburger d-block d-xl-none">
									<span class="h-top"></span>
									<span class="h-middle"></span>
									<span class="h-bottom"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-7 col-xl-8 col-lg-9 col-md-8 col-sm-6 col-xs-6">
					<nav class="main-nav">
						<div class="inner-logo d-xl-none text-center">
							<a href="index"><img src="assets/images/logo.png" alt=""></a>
						</div>
						<ul style="padding-left: 76px;">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="package.php">Package</a></li>
							<li><a href="gallary.php">Gallary</a></li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
						<div class="inner-contact-options d-xl-none">
							<div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a href="tel:+17632275032">+1 763-227-5032</a></div>
						</div>
					</nav>
				</div>

				<div class="col-xxl-3 col-xl-2 col-lg-1">
					<div class="nav-right d-xl-flex d-none">
					<?php if($_SESSION['login'])
					{?>
						<div class="nav-right-icons">
							<div class="user-dropdown">
								<i class='bx bx-user-circle'></i>
								<!-- <ul class="user-drop-list">
									<li><a href="profile.php">My Account</a></li>
									<li><a href="change-password.php">Change Password</a></li>
									<li><a href="tour-history.php">My Tour History</a></li>
								</ul> -->
								<ul class="user-drop-list">
									<li><?php echo htmlentities($_SESSION['login']);?></li>
									<li><a href="change-password.php">Change Password</a></li>
									<li><a href="tour-history.php">My Tour History</a></li>
									<li><a href="issuetickets.php">Issue Ticket</a></li>
									<li><a href="logout.php">Logout</a></li>
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
						<?php } else {?>
							<div class="nav-right-icons">
								<div class="user-dropdown">
									<i class='bx bx-user-circle'></i>
									<ul class="user-drop-list">
										<li class="sig"><a href="login.php">Login</a></li>
										<li class="sigi"><a href="registration.php">Registration</a></li>
										<li class="sigi"><a href="admin/index.php">Admin Lgoin</a></li>
									</ul>
								</div>
							</div>
						<?php }?>
					<div class="nav-right-hotline">
						<div class="hotline-icon">
							<i class="bi bi-phone-vibrate"></i>
						</div>
						<div class="hotline-info">
							<span>Hot Line Number</span>
							<h6><a href="tel:8801761111456">+880 176 1111 456</a></h6>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>