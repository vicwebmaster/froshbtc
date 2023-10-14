<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
  if(!isset($_SESSION['amt'])){
	  header("location:deposit");
  }
  $query = mysqli_query($conn, "SELECT * FROM _admin");
  $fetch = mysqli_fetch_array($query);

$btcamt =$_SESSION['amt'].".00";
?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="lUL057FjMpVSHMl1nvYZuVef3gNwWatt9WIIgh2a">
    <title><?php echo $system['sitename']; ?> - Deposit Confirm</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Deposit Confirm">
    
    <meta itemprop="name" content="Megavex-Trade - Deposit Confirm">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="manual">
    
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
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/bootstrap-fileinput.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/main.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold//css/custom.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/color.php?color=CCA354&secondColor=000000">
  
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/sweetalert2.min.css">
  <style type="text/css">
    .withdraw-thumbnail{
        max-width: 220px;
        max-height: 220px
    }
</style>
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
            <h2 class="page-title">Deposit Confirm</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Deposit Confirm</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->    <section class="cmn-section">
   <div class="container">
       <div class="row mb-60-80 justify-content-center">
           <div class="col-md-8">
               <div class="card">
                   <div class="card-body  ">
                        <form id="pay" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="col-md-12 text-center">
                                    <p class="text-center mt-2">You have requested  <b class="text-success"><?php echo $_SESSION['amt']; ?> USD</b> , Please pay <b class="text-success"><?php echo $btcamt; ?> USDT</b>  for successful payment </p>
                                    <h4 class="text-center mb-4">Please follow the instruction below</h4>

                                    <p class="my-4 text-center"><p style="outline: 0px; margin-bottom: 1rem; color: rgb(124, 135, 152); font-family: Rubik, sans-serif; font-size: 16px;"><span style="outline: 0px; font-size: 1rem;">USDT-Wallet-Address:</span><span style="outline: 0px; font-size: 1rem;">&nbsp;</span><span style="color: white; font-family: Arial, Helvetica, sans-serif; font-size: 20px; font-weight:bold;">
									<?php $sendBTChere=$fetch['USDT']; echo $sendBTChere; ?></span>
                  <div class="input-group-append">
                    <span class="input-group-text copytext copyBoard" id="copyBoard"> Copy USDT Address</span>
                  </div>

                                </div>

                 <input type="text" id="referralURL" value="<?= $sendBTChere ?>" hidden>
                  

								<div class="col-md-12">
									<div class="form-group mt-4">
										<label><strong>Transaction hash/ID  <span class="text-danger">*</span>  </strong></label>
										<br>

										<div class="fileinput fileinput-new " data-provides="fileinput">
											
											<div class="fileinput-preview fileinput-exists thumbnail wh-200-150"></div>

											<div class="img-input-div">
                                                <input type="text" class="form-control" placeholder="Enter hash/ID here" name="hash">
<!--
												<span class="btn btn-info btn-file">
													<span class="fileinput-new "> Select Proof of Transfer</span>
													<span class="fileinput-exists"> Change</span>
													<input type="file" name="image" accept="image/*" >
												</span>
-->
											</div>

										</div>

									</div>
								</div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" id="payBtn" class="btn cmn-btn btn-block mt-2 text-center">Confirm Deposit</button>
                                        <button type="button" style="display:none" id="loading" class="btn cmn-btn btn-block mt-2 text-center">Confirm Deposit</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
               </div>
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

  <script src="../assets/templates/bit_gold//js/bootstrap-fileinput.js"></script>
  <!-- slick slider js -->
  <script src="../assets/templates/bit_gold//js/vendor/slick.min.js"></script>
  <script src="../assets/templates/bit_gold//js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="../assets/templates/bit_gold//js/app.js"></script>


  <link rel="stylesheet" href="../assets/templates/bit_gold/css/iziToast.min.css">
<script src="../assets/templates/bit_gold/js/iziToast.min.js"></script>
<script src="../assets/templates/bit_gold/js/sweetalert2.min.js"></script>
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
  $("#pay").submit(function(e){
      e.preventDefault();
      $("#payBtn").hide();
      $("#loading").show();
      $.ajax({
          url:'process/confirmPay-usdt.php',
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
                title: 'Proof Successfully Uploaded!',
                text: 'Your Payment is under Review',
                icon: 'success',
              }).then((result)=>{
					if(result.isConfirmed){
						window.location.href='index';
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
            window.location.href = "../change/" + $(this).val();
        });
    })();
</script>


</body>
</html>

  </body>
</html> 