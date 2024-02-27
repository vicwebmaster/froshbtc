<?php
include "dashboard/process/config.php"; 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="RjewJ7FbUGqKO9kPxi3G8VMYIu84PptVCtxZdt8H">
    <title><?php echo $system['sitename']; ?>- Login</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $system['sitename']; ?>  - Home">
    
    <meta itemprop="name" content="<?php echo $system['sitename']; ?>  - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
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
  <link rel="stylesheet" href="assets/templates/bit_gold/css/sweetalert2.min.css">
  <?php include "chat.php"; ?>  
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
            <div class="account-card">
              <div class="account-card__header bg_img overlay--one" data-background="assets/images/frontend/login/5fce3a1188a861607350801.jpg">
                <h2 class="section-title">Welcome To <span class="base--color"><?php echo $system['sitename']; ?></span></h2>
                <p>No 1 Leading Trading Platforms in Digital assets</p>
              </div>
              <div class="account-card__body">
                <form id="_login" action="dashboard/login.php" class="mt-4">
				<div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter user name" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" type="text" class="form-control" name="password" placeholder="Enter password" required>
                  </div>



                  <div class="mt-3">
                    <button type="submit" class="cmn-btn" id="signinBtn">Login Now</button>
					<button type="button" class="cmn-btn" style="display:none" id="loading"><i class="fa fa-spinner fa-spin"></i></button>
                  </div>
                  <div class="form-row mt-2">
                    <div class="col-sm-6">
                      <div class="form-group form-check pl-0">
                        <p class="f-size-14">Forgot Password? <a href="reset" class="base--color">Reset Now</a></p>
                      </div>
                    </div>
                    <div class="col-sm-6 text-sm-right">
                      <p class="f-size-14">Haven't an account? <a href="register" class="base--color">Sign Up</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
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


<script src="assets/templates/bit_gold/js/sweetalert2.min.js"></script>
<script>
  $("#_login").submit(function(e){
      e.preventDefault();
      $("#signinBtn").hide();
      $("#loading").show();
      $.ajax({
          url:'dashboard/process/login.php',
          method: 'POST',
          dataType: 'JSON',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success:function(resp){
            $("#loading").hide();
            $("#signinBtn").show();
            if(resp.status===1){
              window.location.href='dashboard?id='+resp.id;
            }else if(resp.status===2){
              Swal.fire({
                title: 'Notice!',
                text: resp.message,
                icon: 'info',
              }).then((result)=>{
               if(result.isConfirmed){
                  window.location.href='verify';
               }
              })
			}else{ 
              Swal.fire({
                title: 'Error!',
                text: resp.message,
                icon: 'error',
              })
            }
          }
      })
  })
</script>

</body>
</html> 