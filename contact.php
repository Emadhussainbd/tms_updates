<?php
session_start();
error_reporting(0);
include('includes/db.php');
if(isset($_POST['submit1']))
{
  $fname=$_POST['fname'];
  $email=$_POST['email'];	
  $mobile=$_POST['mobileno'];
  $subject=$_POST['subject'];	
  $description=$_POST['description'];
  $sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  $query->bindParam(':email',$email,PDO::PARAM_STR);
  $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  $query->bindParam(':subject',$subject,PDO::PARAM_STR);
  $query->bindParam(':description',$description,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if($lastInsertId)
  {
  $msg="Enquiry  Successfully submited";
  }
  else 
  {
  $error="Something went wrong. Please try again";
  }

}

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
      <h2 class="breadcrumb-title">Contact Us</h2>
      <ul class="d-flex justify-content-center breadcrumb-items">
        <li class="breadcrumb-item"><a href="index.php">Home <span style="color: #4253ff; font-size: 18px;padding-right: 12px; padding-left: 8px;">></span></a></li>
        <li class="breadcrumb-item active">Contact Us</li>
      </ul>
    </div>
  </div>
</div>


<div class="contact-wrapper pt-100">
  <div class="container">
    <div class="row align-items-center justify-content-lg-center gy-5">
      <div class="col-lg-6">
        <div class="contatc-intro-figure">
          <img src="assets/images/banner/contact-bg.png" alt="" class="img-fluid">
        </div>
      </div>
      <div class="col-lg-5">
        <div class="contact-info">
          <h3>Contact Info.</h3>
          <ul>
            <li>
            <h6>Let’s Talk</h6>
              <a href="tel:8801761111456">+88 0176 1111 456</a>
            </li>
            <li>
            <h6>Loacation.</h6>
              <a href="#">Sylhet Sadar, Sylhet, Bangladesh</a>
            </li>
            <li>
            <h6>Visit Us.</h6>
              <a href="#">Facebook: https://www.facebook.com/avartourismsyl</a>
              <a href="#">Twitter: https://www.twitter.com/avartourismsyl</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<div class="container mt-120">
  <form name="enquiry" method="post" id="contact_form">
    <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
    <div class="contact-form-wrap">
      <h3>Get In Touch</h3>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-input-group">
            <label for="name">Name</label>
            <input type="text" name="fname" placeholder="Your name" id="fname">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-input-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Your Email" id="email">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-input-group">
            <label for="name">Mobile No</label>
            <input type="text" name="mobileno" placeholder="11 Digit Mobile No" id="mobileno" maxlength="11">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-input-group">
            <label for="email">Subject</label>
            <input type="text" name="subject" placeholder="Subject" id="subject">
          </div>
        </div>
      </div>
      <div class="custom-input-group">
        <textarea cols="20" rows="7" name="description" id="description" placeholder="Your message"></textarea>
      </div>
      <div class="custom-input-group">
        <div class="submite-btn">
          <button type="submit" name="submit1">Send Message</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</div>



<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>		