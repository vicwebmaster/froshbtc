<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
?><!-- meta tags and other links -->
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
    
    <meta itemprop="name" content="Bethertrade - Dashboard">
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
            <h2 class="page-title">Two Factor</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Two Factor</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section">
        <div class="container">
            <div class="row dashboard-content">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="dashboard-inner-content">

                        <div class="row">


                            <div class="col-lg-6 col-md-6">
                                                                    <div class="card">

                                        <h5 class="card-header">Two Factor Authenticator</h5>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" name="key" value="A7KHPNK3SEG3AY2L"
                                                           class="form-control form-control-lg" id="referralURL"
                                                           readonly>
                                                    <div class="input-group-append">
                                                        <span class="input-group-text copytext copyBoard" id="copyBoard"
                                                              onclick="myFunction()"> <i class="fa fa-copy"></i> </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mx-auto text-center">
                                                <img class="mx-auto" src="https://chart.googleapis.com/chart?chs=200x200&amp;chld=M|0&amp;cht=qr&amp;chl=otpauth%3A%2F%2Ftotp%2FStanleyamaziro%40Bethertrade%3Fsecret%3DA7KHPNK3SEG3AY2L">
                                            </div>
                                            <div class="form-group mx-auto text-center">

                                                <a href="#0" class="btn btn-lg mt-3 mb-1 cmn-btn"
                                                   data-toggle="modal"
                                                   data-target="#enableModal">Enable Two Factor Authenticator</a>
                                            </div>

                                        </div>
                                    </div>

                                                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class=" card">
                                    <h5 class="card-header">Google Authenticator</h5>
                                    <div class=" card-body">
                                        <h5 class="text-uppercase">Use Google Authenticator to Scan the QR code  or use the code</h5>
                                        <hr/>
                                        <p>Google Authenticator is a multifactor app for mobile devices. It generates timed codes used during the 2-step verification process. To use Google Authenticator, install the Google Authenticator application on your mobile device.</p>
                                        <a class="btn btn-md mt-3 cmn-btn"
                                           href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en"
                                           target="_blank">DOWNLOAD APP</a>
                                    </div>
                                </div><!-- //. single service item -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/Dashboard area-->



    <!--Enable Modal -->
    <div id="enableModal" class="modal fade" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h4 class="modal-title">Verify your OTP</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../user/twofactor/enable" method="POST" class="register">
                    <input type="hidden" name="_token" value="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">                    <div class="modal-body ">
                        <div class="form-group">
                            <input type="hidden" name="key" value="A7KHPNK3SEG3AY2L">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Enter Google Authenticator Code">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary action-btn">Verify</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!--Disable Modal -->
    <div id="disableModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h4 class="modal-title">Verify your OTP disable</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../user/twofactor/disable" method="POST" class="register">
                    <input type="hidden" name="_token" value="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="code"
                                   placeholder="Enter Google Authenticator Code">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger action-btn" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary action-btn">Verify</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<!-- footer section start -->
<?php
    require_once "../assets/dash-footer.php";
?>
<!-- footer section end -->
  </div> <!-- page-wrapper end -->
    <!-- jQuery library -->
  <script src="../assets/templates/bit_gold//js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../assets/templates/bit_gold//js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="../assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="../assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="../assets/templates/bit_gold//js/app.js"></script>


  <link rel="stylesheet" href="../assets/templates/bit_gold/css/iziToast.min.css">
<script src="../assets/templates/bit_gold/js/iziToast.min.js"></script>


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
        $('.copyBoard').click(function(){
        "use strict";
            var copyText = document.getElementById("referralURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            iziToast.success({message: "Copied: " + copyText.value, position: "topRight"});
      });
    </script>

<script>
    (function () {
        "use strict";
        $(document).on("change", ".langSel", function () {
            window.location.href = "../change/" + $(this).val();
        });
    })();
</script>


</body>
</html>

  </body>
</html> 