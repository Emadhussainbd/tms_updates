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


<div class="breadcrumb breadcrumb-style-one">
  <div class="container">
    <div class="col-lg-12 text-center">
      <h2 class="breadcrumb-title">Gallery</h2>
      <ul class="d-flex justify-content-center breadcrumb-items">
        <li class="breadcrumb-item"><a href="index.php">Home <span style="color: #4253ff; font-size: 18px;padding-right: 12px; padding-left: 8px;">></span></a></li>
        <li class="breadcrumb-item active">Gallery</li>
      </ul>
    </div>
  </div>
</div>

<div class="gallary-wrapper">
  <div class="container">
    <div class="gallary-group pt-80">
    <div class="gallary-group-header">
      <h4 class="gallary-group-title">Tour Gallery</h4>
      <div class="gallary-arrows text-center d-lg-block d-none">
        <div class="gallary-button-prev gallary-prev1" tabindex="0" role="button" aria-label="Previous slide"><i class="bi bi-chevron-double-left"></i></div>
        <div class="gallary-button-next gallary-next1" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-chevron-double-right"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="swiper gallary-slider">
        <div class="swiper-wrapper"> 
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm1.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm1.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
                </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm2.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm2.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
              </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl1.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl1.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl2.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl2.png"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl3.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl3.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl4.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-xl4.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl5.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl5.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm3.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm3.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
                </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm4.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm4.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
              </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl6.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl6.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl7.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl7.png"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl7.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl7.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl8.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-xl8.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl9.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl9.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm5.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm5.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
                </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-sm6.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-sm6.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay">
                <i class="bi bi-eye"></i>
              </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl10.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl10.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl11.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl11.png"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl12.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl12.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl3.png" alt="Image Gallery">
              <a href="assets/images/gallary/g-xl3.png" data-fancybox="gallery" data-caption="Caption Here" class="gallary-item-overlay"> <i class="bi bi-eye"></i> </a>
            </div>
            <div class="gallary-item">
              <img src="assets/images/gallary/g-xl14.png" alt="Image Gallery">
              <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="Caption Here" href="assets/images/gallary/g-xl14.png"> <i class="bi bi-eye"></i> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php');?>
