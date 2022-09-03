<?php 
session_start();
include('includes/db.php');
?>

<?php
error_reporting(0);
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $mnumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql="INSERT INTO tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname',$fname,PDO::PARAM_STR);
    $query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
    $query->bindParam(':password',$password,PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if($lastInsertId)
    {
    $_SESSION['msg']="You are Scuccessfully registered. Now you can login ";
    header('location:thankyou.php');
    }
    else 
    {
    $_SESSION['msg']="Something went wrong. Please try again.";
    header('location:registration.php');
    }
}
?>



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

    <div class="main">
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form name="signup" method="post" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="fname" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="text" maxlength="11" name="mobilenumber" id="mobilenumber" placeholder="Mobile number"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" onBlur="checkAvailability()" autocomplete="off" required="" placeholder="Your Email"/>
                                <span id="user-availability-status" style="font-size:12px;"></span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" required="" placeholder="Password"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="CREATE ACCOUNT"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="users/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>