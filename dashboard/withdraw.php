<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
  if(isset($_POST['submit'])){
	  if($_POST['amount']>0){
		  if($_POST['amount']>$clientdata['_totalBal']){
			 echo "
				<script>
					alert('You have Insufficient balance to Prompt Request!');
				 </script>";
		  }else{
			$_SESSION['w-amt']=$_POST['amount'];
			$_SESSION['w-wallet']=$_POST['wallet'];
			header("location:w-preview"); 
		  }
	  }else{
		  echo "
				<script>
					alert('Minimum Amount is 1 USD!');
				 </script>";
	  }
	  
  }
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="lUL057FjMpVSHMl1nvYZuVef3gNwWatt9WIIgh2a">
    <title><?php echo $system['sitename']; ?> - Withdraw Money</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Withdraw Money">
    
    <meta itemprop="name" content="Megavex-Trade - Withdraw Money">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../user/withdraw">
    
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
  
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/sweetalert2.min.css">
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
            <h2 class="page-title">Withdraw Money</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Withdraw Money</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->
    <section class="cmn-section pt-60">
        <div class="container ">
            <div class="row mb-60-80 justify-content-center">
               <div class="col-md-12">
                    <div class="right float-right mb-5">
                        <a href="w-history" class="btn cmn-btn">
                            Withdraw History                            
                        </a>
                    </div>
                </div>
                
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card card-deposit b-primary">
                        <div class="card-body card-body-deposit">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <ul class="list-group text-center">
                                        <li class="list-group-item">
                                        Funds Withdrawal</li>
                                        <li class="list-group-item">Limit : 20 - 100000 USD</li>

                                        <li class="list-group-item"> Charge - 0.5 USD + 0.5%
                                        </li>

                                        <li class="list-group-item">
                                            <a href="javascript:void(0)" class="btn btn-block  cmn-btn deposit" data-toggle="modal" data-target="#exampleModal">
                                                Withdraw Now</a>
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


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-bg">
                <div class="modal-header">
                    <h5 class="modal-title method-name" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="withdraw" method="post" class="register">
                    <input type="hidden" name="_token" value="lUL057FjMpVSHMl1nvYZuVef3gNwWatt9WIIgh2a">                    <div class="modal-body">
                        <p class="text-info depositLimit"></p>
                        <p class="text-info depositCharge"></p>

                        <div class="form-group">
                            <input type="hidden" name="currency"  class="edit-currency form-control" value="">
                            <input type="hidden" name="method_code" class="edit-method-code  form-control" value="">
                        </div>



                        <div class="form-group">
                            <label>Select Wallet:</label>
                            <div class="form-group">
                                <select name="wallet" class="form-control form-control-lg">
                                    <option value="BTC">Bitcoin</option>
                                    <option value="USDT">USDT</option>
                                    <option value="ETH">Ethereum </option>
                                    <option value="TRX">Tron</option>
                                    <option value="BNB">BNB</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Enter Amount:</label>
                            <div class="input-group">
                                <input id="amount" type="text" class="form-control form-control-lg" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')" name="amount" placeholder="0.00" required=""  value="">

                                <div class="input-group-prepend">
                                    <span class="input-group-text addon-bg currency-addon">USD</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn cmn-btn">Confirm</button>
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

<script src="../assets/templates/bit_gold/js/sweetalert2.min.js"></script>

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
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $('.deposit').on('click', function () {
                    var result = $(this).data('resource');

                    $('.method-name').text(`Withdraw Via  ${result.name}`);


                    $('.edit-method-code').val(result.id);
                });
            });
        })(jQuery);
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