<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
  
  if(isset($_POST['submit'])){
	  
	$cpass = mysqli_real_escape_string($conn, $_POST['password_confirmation']);
	$npass = mysqli_real_escape_string($conn, $_POST['password']);
	$pass = mysqli_real_escape_string($conn, $_POST['current_password']);
	if($npass!=$cpass){
		$msg = "<div class='alert alert-danger'>New Password Mismatch!</div>";
	}else if($pass!=$clientdata['_uPassword']){
		$msg = "<div class='alert alert-danger'>Current Password is incorrect!</div>";
	}else{
		$q=mysqli_query($conn, "UPDATE _users SET _uPassword='$npass' WHERE _uId='$userid'");
		if(mysqli_affected_rows($conn)>0){
			$msg = "<div class='alert alert-success'>Password Successfully Changed!</div>";
		}else{
			$msg = "<div class='alert alert-danger'>Network timeout, Try again Shortly!</div>";
		}
	}
	
	
	
  }
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">
  <title><?php echo $system['sitename']; ?> </title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Dashboard">
    
    <meta itemprop="name" content="Megavex-Trade - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../user/dashboard">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/line-awesome.min.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/slick.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/vendor/dots.css">
    <!-- dashdoard main css -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/color.php?color=CCA354&secondColor=000000">
  <style type="text/css">
  #copyBoard{
    cursor: pointer;
  }
</style>
</head>
  <body>
    
  
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
  require_once "../assets/dash-header.php";
?>

        <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">CHANGE PASSWORD</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>CHANGE PASSWORD</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section">
        <div class="container">
            <div class="card">
                <form action="change-password" method="post" enctype="multipart/form-data">
                    <div class="card-body">
					<?php if(isset($msg)){ echo $msg; unset($msg); } ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter Old Password</label>
                                <input type="password" name="current_password" class="form-control form-control-lg"  required>
                            </div>
                            <div class="form-group">
                                <label>Enter New Password</label>
                                <input type="password" name="password" class="form-control form-control-lg" required>
                            </div>
                            <div class="form-group">
                                <label>Re-type Password</label>
                                <input type="password" name="password_confirmation" class="form-control form-control-lg" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-md w-100 cmn-btn">Update</button>
                </div>
                </form>
            </div>
        </div>
    </section>

    

<!-- footer section start -->
<?php
  require_once "../assets/dash-footer.php";
?>
<!-- footer section end -->

  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="https://bethertrade.com/assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="https://bethertrade.com/assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="https://bethertrade.com/assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="https://bethertrade.com/assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="https://bethertrade.com/assets/templates/bit_gold//js/app.js"></script>


  <link rel="stylesheet" href="https://bethertrade.com/assets/templates/bit_gold/css/iziToast.min.css">
<script src="https://bethertrade.com/assets/templates/bit_gold/js/iziToast.min.js"></script>


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

  
  


<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://bethertrade.com/change/" + $(this).val();
        });
    })();
</script>


</body>
</html>

  </body>
</html> 