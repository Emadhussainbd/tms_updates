<?php
session_start();
error_reporting(0);
include('includes/db.php');
if(strlen($_SESSION['login'])==0)
	{	
		header('location:index.php');
	}
	else{
		if(isset($_POST['submit5']))
			{
        $password=md5($_POST['password']);
        $newpassword=md5($_POST['newpassword']);
        $email=$_SESSION['login'];
        $sql ="SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
        $query= $dbh -> prepare($sql);
        $query-> bindParam(':email', $email, PDO::PARAM_STR);
        $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query-> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0)
        {
        $con="update tblusers set Password=:newpassword where EmailId=:email";
        $chngpwd1 = $dbh->prepare($con);
        $chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
        $chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        $chngpwd1->execute();
        $msg="Your Password succesfully changed";
        }
        else {
        $error="Your current password is wrong";	
        }	
	}

?>
<?php include('includes/header.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMS - User Registration</title>
    <link rel="stylesheet" href="users/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="users/css/style.css">
</head>
<body>

<script type="text/javascript">
  function valid()
  {
    if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
  {
    alert("New Password and Confirm Password Field do not match  !!");
    document.chngpwd.confirmpassword.focus();
    return false;
  }
    return true;
  }
</script>
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
</head>
<body>


<div class="preloader">
  <div class="loader">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>


<div class="breadcrumb breadcrumb-style-one">
  <div class="container" style="background: transparent;">
    <div class="col-lg-12 text-center">
      <h2 class="breadcrumb-title">Change Password</h2>
    </div>
  </div>
</div>


<div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form" style="margin-left: auto; margin-right: auto;">
                        <form name="chngpwd" method="post" onSubmit="return valid();" class="register-form" id="register-form">
                        <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                           
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left: 10px;"></i></label>
                                <input type="password" name="password" id="exampleInputPassword1" required="" placeholder="Current Password" style="padding-left: 30px;"/>
                            </div>
														<div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left: 10px;"></i></label>
                                <input type="password" name="newpassword" id="newpassword" required="" placeholder="New Password" style="padding-left: 30px;"/>
                            </div>
														<div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock" style="margin-left: 10px;"></i></label>
                                <input type="password" name="confirmpassword" id="confirmpassword" required="" placeholder="Confirm Password" style="padding-left: 30px;"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit5" id="submit" class="form-submit" value="CHANGE" style="padding: 0px 20px; width: 100%;"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>


<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>

</body>
</html>
<?php } ?>