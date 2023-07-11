<?php
include "dashboard/process/conn.php";
  include "dashboard/process/config.php"; 
?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bethertrade.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:34:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="RjewJ7FbUGqKO9kPxi3G8VMYIu84PptVCtxZdt8H">
  <title><?php echo $system['sitename']; ?> - Contact</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Home">
    
    <meta itemprop="name" content="<?php echo $system['sitename']; ?> - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="index.html">
    
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

<!-- meta tags and other links -->
<?php
  require_once "assets/header.php";
?>


        <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Contact Us</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Contact Us</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->     <!-- contact section start -->
    <section class="pt-120 pb-120">
      <div class="container">
        <div class="contact-wrapper">
          <div class="row">
            <div class="col-lg-6 contact-thumb bg_img" data-background="assets/images/frontend/contact/5fce3861b2a1c1607350369.jpg"></div>
            <div class="col-lg-6 contact-form-wrapper">
              <h2 class="font-weight-bold mb-2">Contact With Us</h2>
              <p class="font-weight-bold">If you have any questions or queries that are not answered on our website, please feel free to contact us. We will try to respond to you as soon as possible. Thank you so much.</p>
              <form action="#" method="post" class="contact-form mt-4">
                <input type="hidden" name="_token" value="KQRkYyl2n0ubgsgLKrJKmPWRf8XoTGYKYAt6xm6Z">                
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" placeholder="Full Name" class="form-control">
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <input name="subject" placeholder="Subject" class="form-control">
                  </div>
                  <div class="form-group col-lg-12">
                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button type="submit" class="cmn-btn">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div><!-- contact-wrapper end -->
      </div>
      <div class="container pt-120">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row mb-none-30">
                            <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="las la-phone"></i>                  <h5 class="mt-2">Phone Number</h5>
                  <div class="mt-4">
                    <p><a href="javascript:void(0)"><?php echo $system['sitenumber']; ?></a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
                            <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="las la-envelope-open"></i>                  <h5 class="mt-2">Email Address</h5>
                  <div class="mt-4">
                    <p><a href="javascript:void(0)"><?php echo $system['siteemail']; ?></a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
                            <div class="col-md-4 col-sm-6 mb-30">
                <div class="contact-item">
                  <i class="las la-map-marker"></i>                  <h5 class="mt-2">Office Address</h5>
                  <div class="mt-4">
                    <p><a href="javascript:void(0)"><?php echo $system['siteaddr']; ?></a></p>
                  </div>
                </div><!-- contact-item end -->
              </div>
                          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- contact section end -->


    

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


<script>
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
  
    <script src="https://maps.google.com/maps/api/js?key="></script>
    <script src="assets/templates/bit_gold/js/map.html"></script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "https://bethertrade.com/change/" + $(this).val();
        });

        $('.policy').on('click',function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('cookie/accept.json', function(response){
                iziToast.success({message: response, position: "topRight"});
                $('.cookie__wrapper').addClass('d-none');
            });
        });
    })();
</script>


</body>

<!-- Mirrored from bethertrade.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:36:30 GMT -->
</html>

  </body>
</html> 