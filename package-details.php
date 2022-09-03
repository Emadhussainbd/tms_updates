<?php
session_start();
error_reporting(0);
include('includes/db.php');
if(isset($_POST['submit2']))
{
$pid=intval($_GET['pkgid']);
$username=$_POST['name'];
// $useremail=$_POST['email'];
$useremail=$_SESSION['login'];
$phone=$_POST['phone'];
$bkashNum=$_POST['bkashNum'];
// echo $useremail;
// echo $phone;
// echo $bkashNum;
// exit;
  $fromdate=$_POST['fromdate'];
  $todate=$_POST['todate'];
  $comment=$_POST['comment'];
  $status=0;
  $sql="INSERT INTO tblbooking(PackageId,Name,UserEmail,Phone,bkashNum,FromDate,ToDate,Comment,status) VALUES(:pid,:username,:useremail,:phone,:bkashNum,:fromdate,:todate,:comment,:status)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':pid',$pid,PDO::PARAM_STR);
  $query->bindParam(':username',$username,PDO::PARAM_STR);
  $query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
  $query->bindParam(':phone',$phone,PDO::PARAM_STR);
  $query->bindParam(':bkashNum',$bkashNum,PDO::PARAM_STR);
  $query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
  $query->bindParam(':todate',$todate,PDO::PARAM_STR);
  $query->bindParam(':comment',$comment,PDO::PARAM_STR);
  $query->bindParam(':status',$status,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
  {
  $msg="Booked Successfully";
  }
  else 
  {
  $error="Something went wrong. Please try again";
  }

}
?>
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>	

<!doctype html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/package-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Aug 2022 09:47:18 GMT -->
<head>
<title>TMS | Tourism Management System</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="assets/images/favicon.png" type="image/gif" sizes="20x20">

<link rel="stylesheet" href="assets/css/select2.min.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link href='assets/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
<!--- /top-header ---->

<div class="preloader">
  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>

<!--- header ---->
<header>
	<div class="header-area header-style-two">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
					<div class="nav-logo d-flex justify-content-between align-items-center">
						<a href="index-2.html"><img src="assets/images/logo-w.png" alt="logo" width="272px"></a>
						<div class="mobile-menu d-flex ">
							<div class="d-flex align-items-center">
								<div class="nav-right-icons d-xl-none d-flex align-items-center ">
									<div class="user-dropdown">
										<i class='bx bx-user-circle'></i>
										<ul class="user-drop-list">
											<li><a href="profile.php">My Account</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="registration.php">Registration</a></li>
                      
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
							<a href="#"><img src="assets/images/logo.png" alt=""></a>
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
								<ul class="user-drop-list">
									<li><a href="profile.php">My Account</a></li>
									<li><a href="change-password.php">Change Password</a></li>
									<li><a href="tour-history.php">My Tour History</a></li>
								</ul>
								<ul class="user-drop-list">
									<li><?php echo htmlentities($_SESSION['login']);?></li>
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
                    <li><a href="admin/index.php" target="_blank">Admin Lgoin</a></li>
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


<div class="breadcrumb breadcrumb-style-one">
  <div class="container"> 
    <div class="col-lg-12 text-center">
      <h2 class="breadcrumb-title">Package Details</h2>
      <ul class="d-flex justify-content-center breadcrumb-items" style="margin-top: 20px;">
        <li class="breadcrumb-item"><a href="index.php">Home <span style="color: #4253ff; font-size: 18px;padding-right: 12px; padding-left: 8px;">></span></a></li>
        <li class="breadcrumb-item active">Package details</li>
      </ul>
    </div>
  </div>
</div>

<?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>


<div class="package-details-wrapper pt-76">
  <div class="container">
    <div class="row ">
      <div class="col-lg-8">
        <div class="tour-package-details">
          <div class="pd-header">
            <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
              <div class="col">
                <div class="pd-single-info">
                  <div class="info-icon">
                    <img src="assets/images/icons/pd1.svg" alt="">
                  </div>
                  <div class="info">
                    <h6>Duration</h6>
                    <span><?php echo htmlentities($result->Duration);?></span>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="pd-single-info">
                  <div class="info-icon">
                    <img src="assets/images/icons/pd2.svg" alt="">
                  </div>
                  <div class="info">
                    <h6>Tour Type</h6>
                    <span><?php echo htmlentities($result->PackageType);?></span>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="pd-single-info">
                  <div class="info-icon">
                    <img src="assets/images/icons/pd3.svg" alt="">
                  </div>
                  <div class="info">
                    <h6>Group Size</h6>
                    <span><?php echo htmlentities($result->GroupSize);?></span>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="pd-single-info">
                  <div class="info-icon">
                    <img src="assets/images/icons/pd4.svg" alt="">
                  </div>
                  <div class="info">
                    <h6>Tour Guide</h6>
                    <span><?php echo htmlentities($result->TourGuide);?></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="pd-thumb">
            <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt="">
            </div>
            <div class="header-bottom">
              <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                <h5 class="location"><i class="bi bi-geo-alt"></i> <?php echo htmlentities($result->PackageLocation);?></h5>
                <ul class="d-flex align-items-center rating">
                  <li><i class="bi bi-star-fill"></i></li>
                  <li><i class="bi bi-star-fill"></i></li>
                  <li><i class="bi bi-star-fill"></i></li>
                  <li><i class="bi bi-star-fill"></i></li>
                  <li><i class="bi bi-star-fill"></i></li>
                </ul>
              </div>
              <h2 class="pd-title"><?php echo htmlentities($result->PackageName);?></h2>
            </div>
          </div>
          <div class="package-details-tabs">
            <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-package1" data-bs-toggle="pill" data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1" aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-package2" data-bs-toggle="pill" data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2" aria-selected="false"> <i class="bi bi-file-earmark-spreadsheet"></i> Travel Plan</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-package3" data-bs-toggle="pill" data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3" aria-selected="false"><i class="bi bi-images"></i> Tour Gallary</button>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">

              <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1" role="tabpanel" aria-labelledby="pills-package1">
                <h3 class="d-subtitle">Package Details</h3>
                <p><?php echo htmlentities($result->PackageDetails);?></p>
                <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                  <div class="col">
                    <div class="featured-img">
                      <img src="assets/images/package/feat-img1.png" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="featured-img">
                      <img src="assets/images/package/feat-img2.png" alt="">
                    </div>
                  </div>
                  <div class="featured-video position-absolute ">
                    <img src="assets/images/package/feat-img3.png" alt="">
                    <div class="video-overlay">
                      <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-icon video-popup" data-fancybox>
                        <i class="bi bi-play-fill"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <table class="table package-info-table mb-0">
                  <tbody>
                    <tr>
                      <th>Destination</th>
                      <td><?php echo htmlentities($result->Destination);?></td>
                    </tr>
                    <tr>
                      <th>Departure Time</th>
                      <td><?php echo htmlentities($result->DepatureTime);?></td>
                    </tr>
                    <tr>
                      <th>Return Time</th>
                      <td><?php echo htmlentities($result->ReturnTime);?></td>
                    </tr>
                    <tr>
                      <th>Included</th>
                      <td>
                        <p><?php echo htmlentities($result->Included);?></p>
                      </td>
                    </tr>
                    <tr>
                      <th>Excluded</th>
                      <td>
                        <p><?php echo htmlentities($result->Excluded);?></p>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="2" class="tour-transport-col"> <div class="tour-transport  d-flex align-items-center justify-content-center"><img src="assets/images/icons/bus.svg" alt=""> <span>Travel With Bus</span></div> </td>
                    </tr>
                  </tbody>
                </table>
                <div class="rating-overview">
                  <h3 class="d-subtitle">Overview</h3>
                  <div class="rating-overview-row row g-0">
                    <div class="col-lg-4 col-md-5 col-sm-5">
                      <div class="total-rating d-flex justify-content-center align-items-center flex-column h-100 ">
                        <h3>10.00</h3>
                        <h5>Excellent</h5>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-7">
                      <div class="rating-info">
                        <div class="rating-box">
                          <h6>Accommodation <span>5.0</span></h6>
                          <div class="rating-bar"></div>
                        </div>
                      <div class="rating-box">
                        <h6>Transport <span>5.0</span></h6>
                        <div class="rating-bar"></div>
                      </div>
                      <div class="rating-box">
                        <h6>Comfort <span>5.0</span></h6>
                        <div class="rating-bar"></div>
                      </div>
                      <div class="rating-box">
                        <h6>Hospitality <span>5.0</span></h6>
                        <div class="rating-bar"></div>
                      </div>
                      <div class="rating-box">
                        <h6>Food <span>5.0</span></h6>
                        <div class="rating-bar"></div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
              </div>

              <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2" role="tabpanel" aria-labelledby="pills-package2">
                <div class="accordion plans-accordion" id="planAccordion">
                  <div class="accordion-item plans-accordion-single">
                    <div class="accordion-header" id="planHeadingOne">
                      <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#planCollapse1" aria-expanded="true" role="navigation">
                        <div class="paln-index-circle">
                          <h4>01</h4>
                        </div>
                        <div class="plan-title">
                          <h5><?php echo htmlentities($result->TPDay1Tittle);?></h5>
                          <h6>10.00 AM to 10.00 PM</h6>
                        </div>
                      </div>
                    </div>
                    <div id="planCollapse1" class="accordion-collapse collapse show" aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                      <div class="accordion-body plan-info">
                        <p><?php echo htmlentities($result->TPDay1Des);?></p>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item plans-accordion-single">
                    <div class="accordion-header" id="planHeadingTwo">
                      <div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#planCollapse2" aria-expanded="true" role="navigation">
                        <div class="paln-index-circle">
                          <h4>02</h4>
                        </div>
                        <div class="plan-title">
                          <h5><?php echo htmlentities($result->TPDay2Tittle);?></h5>
                          <h6>10.00 AM to 10.00 PM</h6>
                        </div>
                      </div>
                    </div>
                    <div id="planCollapse2" class="accordion-collapse collapse" aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                      <div class="accordion-body plan-info">
                        <p><?php echo htmlentities($result->TPDay2Des);?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel" aria-labelledby="pills-package3">
                <div class="row g-4">
                  <div class="col-6">
                    <div class="package-gallary-item">
                      <a href="assets/images/gallary/pgl-1.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-1.png" alt=""></a>
                    </div>
                  </div>
                <div class="col-6">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgl-2.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-2.png" alt=""></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgx-1.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-1.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgl-3.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-3.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgl-4.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-4.png" alt=""></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgx-2.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-2.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgl-5.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-5.png" alt=""></a>
                  </div>
                </div>
                <div class="col-6">
                  <div class="package-gallary-item">
                    <a href="assets/images/gallary/pgl-6.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgl-6.png" alt=""></a>
                  </div>
                </div>
                <div class="col-12">
                  <div class="package-gallary-item">
                  <a href="assets/images/gallary/pgx-3.png" data-fancybox="gallery" data-caption="Caption Here"><img src="assets/images/gallary/pgx-3.png" alt=""></a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="package-sidebar">
        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }  
			else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
          <aside class="package-widget-style-2 widget-form mt-30">
            <div class="widget-title text-center d-flex justify-content-between">
              <h4>Book This Tour</h4>
              <h3 class="widget-lavel">৳<?php echo htmlentities($result->PackagePrice);?> <span>Per Person</span></h3>
            </div>
            <div class="widget-body">
              <form name="book" method="post" id="booking-form">
                <div class="booking-form-wrapper">
                  <div class="custom-input-group">
                    <input type="text" name="name" placeholder="Your Full Name" id="name" required>
                  </div>
                  <div class="custom-input-group">
                    <input type="tel" name="phone" placeholder="Phone" id="phone" required>
                  </div>

                  <div class="custom-input-group">
                    <label for=""><img src="assets/images/bkash.png" alt="" width= "148px"></label>
                    <input type="tel" name="bkashNum" placeholder="Your BKash Number" id="bkashNum" required>
                  </div>
                  
                  <div class="custom-input-group">
                    <i class="bi bi-calendar3"></i>
                    <input placeholder="Select your from date" type="text" name="fromdate" id="datepicker" value="" class="calendar" required>
                  </div>
                  <div class="custom-input-group">
                    <i class="bi bi-calendar3"></i>
                    <input placeholder="Select your to date" type="text" name="todate" id="datepicker2" value="" class="calendar" required>
                  </div>

                  <div class="custom-input-group">
                    <textarea cols="20" rows="7" name="comment" placeholder="Your message"></textarea>
                  </div>
                  <?php if($_SESSION['login'])
					          {?> 
                  <div class="custom-input-group">
                    <div class="submite-btn">
                      <button type="submit" name="submit2">Book Now</button>
                    </div>
                  </div>
                  <?php } else {?>
                    <div class="custom-input-group">
                      <div class="submite-btn">
                        <a href="#" onclick="return confirm('Please Login For Booking Tour. Thanks!')"><button type="submit" name="">Book Now</button></a>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </form>
            </div>
          </aside>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php }} ?>

<?php include('includes/footer.php');?>
