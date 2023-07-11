<?php 
function send_mail($email, $messag, $subject) {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "server136.web-hosting.com";
        $mail->Port = 587;
        $mail->AddAddress($email);
        $mail->Username = "admin@megavex-trade.com";
        $mail->Password = "Grace2022";
        $mail->SetFrom('admin@megavex-trade.com', 'Wise Trade');
        $mail->AddReplyTo("admin@megavex-trade.com", "Wise Trade");
        $mail->Subject = $subject;
        $mail->MsgHTML($messag);
        if($mail->Send()){ return 1; }else{ return 0; }
    }
    include "dashboard/process/conn.php";
    include "dashboard/process/function.php";
    include "dashboard/process/config.php"; 
    session_start();
    if(isset($_SESSION['verifyEmail'])){
			$newotp3 = rand(100000, 999999);
			$date3 = date('Y-m-d');
			$email3 = $_SESSION['verifyEmail'];
            $time3 = date('Y-m-d', strtotime($date3 .' +1 day'));
			$query3 = mysqli_query($conn, "UPDATE _users SET _otp='$newotp3', _otpExpiry='$time3' WHERE _uEmail='$email3'");
            if($query3){
                $subject3 = "Please Verify your email Address";
				$message3 = "
                <html>
                <head>
                    <style>
                        .btn{
                            padding: 12px;
                            background-color: red;
                            color: white;
                            border-radius: 8px;
                            border: 1px solid wiite;
                            text-decoration: none;
                        }
                    </style>
                </head>

                <body style='background-color:#000033; color:white; padding: 10px;'>
                    <h5> Hi, </h5>
                    <p>Thanks for joining us! <br> Please click on the button below to verify your email address</p>
                    
                    <a href='".$system['siteurl']."/verify?otp=".$newotp3."&&email=".$_SESSION['verifyEmail']."' class='btn'>Verify Here!</a>
                
                </body>
                <footer style= 'margin-top: solid; margin-color:white; text-align:center;'>
                        <h6>&copy ".date('Y')." ".$system['sitename'].". All Rights Reserved.</h6>
                </footer>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers3 = "MIME-Version: 1.0" . "\r\n";
                $headers3 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers3 .= 'From: <'.$system['siteemail'].'>' . "\r\n";
                
                if(send_mail($email3, $message3, $subject3)==1){
                    $sentEmail = "true";
                }
                /*$app->sendMail($email, $subject, $x);*/
                
            }
            unset($_SESSION['verifyEmail']); 
       
    }else if(isset($_GET['otp']) && $_GET['otp']!="" && isset($_GET['email']) && $_GET['email']!=""){
        $otp = htmlspecialchars($_GET['otp']);
        $email = $_GET['email'];
        $date = date('Y-m-d');
		$query = mysqli_query($conn, "SELECT * FROM _users WHERE _otp='$otp' && _otpExpiry>'$date' && _uEmail='$email'")or die(mysqli_error($conn));
        if(mysqli_num_rows($query)<1){
            $newotp = rand(100000, 999999);
            $time = date('Y-m-d', strtotime($date .' +1 day'));
			$query2 = mysqli_query($conn, "UPDATE _users SET _otp='$newotp', _otpExpiry='$time' WHERE _uEmail='$email'");
            if($query){
                $subject = "Please Verify your email Address";
				$message = "
                <html>
                <head>
                    <style>
                        .btn{
                            padding: 12px;
                            background-color: red;
                            color: white;
                            border-radius: 8px;
                            border: 1px solid wiite;
                            text-decoration: none;
                        }
                    </style>
                </head>

                <body style='background-color:#000033; color:white; padding: 10px;'>
                    <h5> Hi, </h5>
                    <p>Thanks for joining us! <br> Please click on the button below to verify your email address</p>
                    
                    <a href='".$system['siteurl']."/verify?otp=".$newotp."&&email=".$email."' class='btn'>Verify Here!</a>
                
                </body>
                <footer style= 'margin-top: solid; margin-color:white; text-align:center;'>
                        <h6>&copy ".date('Y')." ".$system['sitename'].". All Rights Reserved.</h6>
                </footer>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <'.$system['siteemail'].'>' . "\r\n";
                if(send_mail($email, $message, $subject)==1){
                    $sentEmail2 = "true";
                }
                /*$app->sendMail($email, $subject, $x);*/
                
            }
         }else{
            $stmt = mysqli_query($conn, "UPDATE _users SET _otp='', _otpExpiry='', _uStatus='Active' WHERE _uEmail='$email'");
            if($stmt){
                $verified = "true";
            }  
        }
        
    }else{
        header("location:login");
    }
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="RjewJ7FbUGqKO9kPxi3G8VMYIu84PptVCtxZdt8H">
    <title><?php echo $system['sitename']; ?>- Verify</title>
    <meta name="description" content=" ">
    <meta name="keywords" content=" ">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Bethertrade - Home">
    
    <meta itemprop="name" content="Bethertrade - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bethertrade">
    <meta property="og:description" content="Bethertrade">
    <meta property="og:image" content="assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="index.php">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/line-awesome.min.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/slick.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/vendor/dots.css">
      <!-- dashdoard main css -->
  <link rel="stylesheet" href="assets/templates/bit_gold/css/main.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/custom.css">
  <link rel="stylesheet" href="assets/templates/bit_gold/css/color9bce.css?color=CCA354&amp;secondColor=000000">
  </head>
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
<?php
  require_once "assets/header.php";
?>
  <!-- header-section end  -->

        <!-- account section start -->
    <div class="account-section bg_img" data-background="assets/images/frontend/login/5fce3a113b6d91607350801.jpg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-7">
		  <?php if(isset($verified)){ ?>
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/frontend/login/5fce3a1188a861607350801.jpg">
                <h2 class="section-title">Welcome To <span class="base--color">Megavex Trade</span></h2>
                <p>Verification Successful</p>
				<button onclick="window.location='login'" class="cmn-btn">Login Now</button>
              </div>
            </div>
		  <?php }else if(isset($sentEmail)){ ?>
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/frontend/login/5fce3a1188a861607350801.jpg">
                <h2 class="section-title">A mail has
                                        successful been sent to your Email, Login to your Email to complete your
                                        Verification Process</p>
              </div>
            </div>
		  <?php }else if(isset($sentEmail2)){ ?>
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/frontend/login/5fce3a1188a861607350801.jpg">
                <h2 class="section-title">Your OTP
                                        has expired... But a new reset mail has been sent to your Email, Login to your
                                        Email to complete your Verification Process</p>
              </div>
            </div>
		  <?php } unset($verified); unset($sentEmail); unset($sentEmail2); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- account section end -->

    

    <!-- footer section start -->
<?php
  require_once "assets/footer.php";
?>
<!-- footer section end -->
</div> <!-- page-wrapper end -->

    <!-- jQuery library -->
  <script src="assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="assets/templates/bit_gold/js/vendor/slick.min.js"></script>
  <script src="assets/templates/bit_gold/js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="assets/templates/bit_gold/js/app.js"></script>


  <link rel="stylesheet" href="assets/templates/bit_gold/css/iziToast.min.css">
<script src="assets/templates/bit_gold/js/iziToast.min.js"></script>



</body>
</html> 