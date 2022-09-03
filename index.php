<?php
session_start();
error_reporting(0);  
include('includes/db.php');
?>

<?php include('includes/header.php'); ?>

<div class="preloader">
  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>

<div class="hero-area hero-style-three">
	<img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
	<div class="hero-main-wrapper position-relative">
		<div class="hero-social">
			<ul class="social-list d-flex justify-content-center align-items-center gap-4">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">instagram</a></li>
				<li><a href="#">Linked in</a></li>
			</ul>
		</div>
	<div class="swiper hero-slider-three ">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="slider-bg-1">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-lg-8">
								<div class="hero3-content">
									<span class="title-top">Wellcome To Tourism Management System</span>
									<h1>Journey to Explore Sylhet</h1>
									<p>Just view the nature of river side it will be a memorable experience for you. The mountain and landscape views around the destination will make you mesmerizing. Oho just see the crystal clear water and stones. Bisnakandi became a popular tourist spot in Sylhet these days for its natural beauties..</p>
									<a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-slide">
				<div class="slider-bg-3">
					<div class="container">
						<div class="row d-flex justify-content-center align-items-center">
							<div class="col-lg-8">
								<div class="hero3-content">
									<span class="title-top">Wellcome To Tourism Management System</span>
									<h1>Enjoy Your New Adventure</h1>
									<p>Just view the nature of river side it will be a memorable experience for you. The mountain and landscape views around the destination will make you mesmerizing. Oho just see the crystal clear water and stones. Bisnakandi became a popular tourist spot in Sylhet these days for its natural beauties..</p>
									<a href="package.php" class="button-fill-primary banner3-btn">Book Your Travel</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
		<div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i class="bi bi-arrow-left"></i></div>
		<div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
	</div>
	</div>
</div>


<div class="package-area package-style-two pt-110 chain">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-lg-8 col-sm-10">
				<div class="section-head-alpha">
					<h2>Package List</h2>
					<p>Just view the nature of river side it will be a memorable experience for you. The mountain and landscape views around the destination will make you mesmerizing. Oho just see the crystal clear water and stones. Bisnakandi became a popular tourist spot in Sylhet these days for its natural beauties.</p>
				</div>
			</div>
			<div class="col-lg-4 col-sm-10">
				<div class="package-btn text-lg-end">
					<a href="package.php" class="button-fill-primary all-package-btn">View All Tour</a>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center g-4">
		<?php $sql = "SELECT * from tbltourpackages order by rand() limit 6";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
			foreach($results as $result)
			{	?>
			<div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
				<div class="package-card-beta" style="margin-bottom: 32px;">
					<div class="package-thumb">
						<a href="package-details.php"><img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt="" width="370px" height="235px" style="border-radius: 10px"></a>
						<p class="card-lavel" style="text-align: center;">
							<i class="bi bi-clock"></i> <span><?php echo htmlentities($result->Duration);?></span>
						</p>
					</div>
					<div class="package-card-body">
						<h3 class="p-card-title"><a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Package Name: <?php echo htmlentities($result->PackageName);?></a></h3>
						<p>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></p>
						<div class="p-card-bottom">
							<div class="book-btn">
								<a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
							</div>
							<div class="p-card-info">
								<span>From</span>
								<h6>$<?php echo htmlentities($result->PackagePrice);?> <span>Per Person</span></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }} ?>
		</div>
		<div class="package-page-btn text-center mt-60">
			<a href="package.php" class="button-fill-round">View All</a>
		</div>
	</div>
</div>


<div class="destination-area destination-style-two pt-110 pb-110">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-sm-10 ">
				<div class="section-head-alpha text-center mx-auto">
					<h2>Top Destination</h2>
					<p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum.</p>
				</div>
			</div>
		</div>
		<div class="row d-flex justify-content-center g-4">
			<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds1.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Lalakhal</h5></a>
							<a href="#"><h6>45 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds2.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Sreemangal</h5></a>
							<a href="#"><h6>35 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds3.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Tanguar Haor</h5></a>
							<a href="#"><h6>15 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds4.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Jaflong</h5></a>
							<a href="#"><h6>34 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds5.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Dolura</h5></a>
							<a href="#"><h6>10 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
				<div class="destination-item">
					<div class="destination-img">
						<img src="assets/images/destination/top-ds6.png" alt="">
					</div>
					<div class="destination-overlay">
						<div class="content">
							<a href="#"><h5>Bisnakandi</h5></a>
							<a href="#"><h6>67 Place</h6></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="upcoming-tour-area pt-110 pb-110 chain">
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
				<div class="section-head-alpha text-lg-start text-center">
					<h2 class="text-white">Upcoming Best Tours</h2>
					<p class="text-white">Duis rutrum nisl urna maecenas vel libero faucibus nisi vene natis hendrerit aid lectus suspendissendt.</p>
				</div>
			</div>
			<div class="col-lg-7 d-flex justify-content-lg-end justify-content-center">
				<div class="slider-arrows text-center d-lg-flex flex-row justify-content-center d-none gap-5">
					<div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
					<div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i></div>
				</div>
			</div>
		</div>
		<div class="row align-items-center justify-content-center fadeffect">
			<div class="col-lg-12">
				<div class="swiper upcoming-tour">
					<div class="swiper-wrapper">
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 9";
			$query = $dbh->prepare($sql);
			$query->execute();
			$results=$query->fetchAll(PDO::FETCH_OBJ);
			$cnt=1;
			if($query->rowCount() > 0)
			{
			foreach($results as $result)
			{	?>
		<div class="swiper-slide">
			<div class="package-card-beta">
				<div class="package-thumb">
				<a href="package-details.php"><img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt=""></a>
					<p class="card-lavel">
						<i class="bi bi-clock"></i> <span><?php echo htmlentities($result->Duration);?></span>
					</p>
				</div>
				<div class="package-card-body">
					<h3 class="p-card-title"><a href="package-details.php">Package Name: <?php echo htmlentities($result->PackageName);?></a></h3>
					<div class="p-card-bottom">
						<div class="book-btn">
							<a href="package-details.php">Book Now <i class='bx bxs-right-arrow-alt'></i></a>
						</div>
						<div class="p-card-info">
							<span>From</span>
							<h6>$<?php echo htmlentities($result->PackagePrice);?> <span>Per Person</span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php }} ?>
	</div>
</div>
</div>
</div>
	<div class="row text-center d-flex justify-content-center">
		<div class="col-md-4">
			<a href="destination.html" class="button-outlined-primary upcoming-btn mt-50" style="margin-top: 88px;">View All Offer</a>
		</div>
	</div>
</div>
</div>





<div class="guide-area guide-style-one pt-110">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-sm-10">
				<div class="section-head-alpha text-center mx-auto">
					<h2>Tour Guide</h2>
					<p>Duis rutrum nisl urna. Maecenas vel libero faucibus nisi venenatis hendrerit a id lectus. Suspendissendt blandit interdum.</p>
				</div>
			</div>
		</div>
	<div class="row d-flex justify-content-center g-4">
		<div class="col-lg-4 col-md-6 col-md-10">
			<div class="guide-card-beta">
				<div class="guide-image">
					<img src="assets/images/guide/guide31.png" alt="">
					<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
						<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
						<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
						<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
						<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
					</ul>
				</div>
				<div class="guide-content">
				<a href="guide.html"><h4 class="guide-name">Emad Hussain</h4></a>
				<h6 class="guide-designation">Tour Guide</h6>
				</div>
			</div>	
		</div>
	<div class="col-lg-4 col-md-6 col-md-10">
		<div class="guide-card-beta">
			<div class="guide-image">
				<img src="assets/images/guide/guide32.png" alt="">
				<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
					<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
					<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
					<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
					<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
				</ul>
			</div>
			<div class="guide-content">
			<a href="guide.html"><h4 class="guide-name">Syed Hasib Ahmed</h4></a>
			<h6 class="guide-designation">Tour Guide</h6>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6 col-md-10">
		<div class="guide-card-beta">
			<div class="guide-image">
				<img src="assets/images/guide/guide-m2.png" alt="">
				<ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
					<li><a href="#"><i class='bx bxl-instagram'></i></a></li>
					<li><a href="#"><i class='bx bxl-facebook'></i></a></li>
					<li><a href="#"><i class='bx bxl-twitter'></i></a></li>
					<li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
				</ul>
			</div>
			<div class="guide-content">
				<a href="guide.html"><h4 class="guide-name">Sadia Munthaha Maha</h4></a>
				<h6 class="guide-designation">Tour Guide</h6>
			</div>
		</div>
	</div>
	</div>
	</div>
</div>

 

<?php include('includes/footer.php');?>
