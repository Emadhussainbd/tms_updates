<?php
session_start();
error_reporting(0);
include('includes/db.php');
?>
<?php include('includes/header.php');?>
<div class="breadcrumb breadcrumb-style-one" style="margin-top: 100px;">
  <div class="container">
    <div class="col-lg-12 text-center">
      <h2 class="breadcrumb-title">Confirmation</h2>
			<h4 style="margin-top: 20px; margin-bottom: 20px; color:#ffff;"><?php echo htmlentities($_SESSION['msg']);?></h4>
			<a href="login.php" style="color:#4253ff; font-size: 20px; font-weight: 700;">Login</a>

    </div>
  </div>
</div>
<!-- //write us -->
</body>
</html>