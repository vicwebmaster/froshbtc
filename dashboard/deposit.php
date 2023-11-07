<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
  if(isset($_POST['submit'])){
	  $_SESSION['amt']=$_POST['amount'];
	  header("location:preview");
  }elseif(isset($_POST['usdt'])){
	  $_SESSION['amt']=$_POST['amount'];
	  header("location:preview-usdt");
  }elseif(isset($_POST['eth'])){
	  $_SESSION['amt']=$_POST['amount'];
	  header("location:preview-eth");
  }elseif(isset($_POST['tron'])){
	  $_SESSION['amt']=$_POST['amount'];
	  header("location:preview-tron");
  }elseif(isset($_POST['bnb'])){
	  $_SESSION['amt']=$_POST['amount'];
	  header("location:preview-bnb");
  }
?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="lUL057FjMpVSHMl1nvYZuVef3gNwWatt9WIIgh2a">
    <title><?php echo $system['sitename']; ?> - Deposit Methods</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Deposit Methods">
    
    <meta itemprop="name" content="Megavex-Trade - Deposit Methods">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../deposit">
    
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
  <?php include "../chat.php"; ?>
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
      <!-- header-section start  -->
  <?php
  require_once "../assets/dash-header.php";
?>
        <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
    
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Deposit Methods</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Deposit Methods</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->    <section class="pt-60 pb-150">

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="right float-right mb-5">
                        <a href="history" class="btn cmn-btn">
                            Deposit History                            
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body b-primary">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <img src="../assets/images/gateway/632d98069f2701663932422.png" class="card-img-top w-100" alt="USDT Transfer">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <ul class="list-group text-center">


                                        <li class="list-group-item">
                                            BTC Transfer</li>

                                        <li class="list-group-item">Limit : 10 - 1000000 USD</li>

                                        <li class="list-group-item"> Charge - 0 USD + 0%
                                        </li>

                                        <li class="list-group-item">
                                            <button type="button" 
                                            class=" btn deposit cmn-btn w-100" data-toggle="modal" data-target="#exampleModal">
                                        Deposit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                

                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body b-primary">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <img src="../assets/images/gateway/qq632d98069f2701663932422.jpg" class="card-img-top w-100" alt="USDT Transfer">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <ul class="list-group text-center">


                                        <li class="list-group-item">
                                            USDT Transfer</li>

                                        <li class="list-group-item">Limit : 10 - 1000000 USD</li>

                                        <li class="list-group-item"> Charge - 0 USD + 0%
                                        </li>

                                        <li class="list-group-item">
                                            <button type="button" 
                                            class=" btn deposit cmn-btn w-100" data-toggle="modal" data-target="#usdtmodal">
                                        Deposit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body b-primary">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <img src="../assets/images/gateway/pngegg(9).png" class="card-img-top w-100" alt="USDT Transfer">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <ul class="list-group text-center">


                                        <li class="list-group-item">
                                            Ethereum Transfer</li>

                                        <li class="list-group-item">Limit : 10 - 1000000 USD</li>

                                        <li class="list-group-item"> Charge - 0 USD + 0%
                                        </li>

                                        <li class="list-group-item">
                                            <button type="button" 
                                            class=" btn deposit cmn-btn w-100" data-toggle="modal" data-target="#ethmodal">
                                        Deposit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body b-primary">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <img src="../assets/images/gateway/pngegg(10).png" class="card-img-top w-100" alt="USDT Transfer">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <ul class="list-group text-center">


                                        <li class="list-group-item">
                                            Tron Transfer</li>

                                        <li class="list-group-item">Limit : 10 - 1000000 USD</li>

                                        <li class="list-group-item"> Charge - 0 USD + 0%
                                        </li>

                                        <li class="list-group-item">
                                            <button type="button" 
                                            class=" btn deposit cmn-btn w-100" data-toggle="modal" data-target="#tronmodal">
                                        Deposit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-body b-primary">
                            <div class="row justify-content-center">
                                <div class="col-md-5 col-sm-12">
                                    <img src="../assets/images/gateway/pngegg(11).png" class="card-img-top w-100" alt="USDT Transfer">
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <ul class="list-group text-center">


                                        <li class="list-group-item">
                                            BNB Transfer</li>

                                        <li class="list-group-item">Limit : 10 - 1000000 USD</li>

                                        <li class="list-group-item"> Charge - 0 USD + 0%
                                        </li>

                                        <li class="list-group-item">
                                            <button type="button" 
                                            class=" btn deposit cmn-btn w-100" data-toggle="modal" data-target="#bnbmodal">
                                        Deposit</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>



    <div class="modal fade" id="bnbmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="exampleModalLabel">Payment By BNB Transfer</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="deposit" method="post" class="register">                    
					<div class="modal-body">
                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="bnb" class="btn-md cmn-btn">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="tronmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="exampleModalLabel">Payment By Tron Transfer</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="deposit" method="post" class="register">                    
					<div class="modal-body">
                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="tron" class="btn-md cmn-btn">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
      
      
    <div class="modal fade" id="ethmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="exampleModalLabel">Payment By Ethereum Transfer</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="deposit" method="post" class="register">                    
					<div class="modal-body">
                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="eth" class="btn-md cmn-btn">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="usdtmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="exampleModalLabel">Payment By USDT Transfer</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="deposit" method="post" class="register">                    
					<div class="modal-body">
                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="usdt" class="btn-md cmn-btn">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <strong class="modal-title text-white" id="exampleModalLabel">Payment By BTC Transfer</strong>
                    <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <form action="deposit" method="post" class="register">                    
					<div class="modal-body">
                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" name="amount" placeholder="0.00" required autocomplete="off">
                                <div class="input-group-prepend">
                                    <span class="input-group-text currency-addon addon-bg">USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-md btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn-md cmn-btn">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

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
"use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>

  
  
    <script>
        $(document).ready(function(){
            "use strict";
            $('.deposit').on('click', function () {
                var id = $(this).data('id');
                var result = $(this).data('resource');
                var minAmount = $(this).data('min_amount');
                var maxAmount = $(this).data('max_amount');
                var baseSymbol = "USD";
                var fixCharge = $(this).data('fix_charge');
                var percentCharge = $(this).data('percent_charge');

                var depositLimit = `Deposit Limit: ${minAmount} - ${maxAmount}  ${baseSymbol}`;
                $('.depositLimit').text(depositLimit);
                var depositCharge = `Charge: ${fixCharge} ${baseSymbol}  ${(0 < percentCharge) ? ' + ' +percentCharge + ' % ' : ''}`;
                $('.depositCharge').text(depositCharge);
                $('.method-name').text(`Payment By  ${result.name}`);
                $('.currency-addon').text(baseSymbol);

                $('.edit-currency').val(result.currency);
                $('.edit-method-code').val(result.method_code);
            });
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