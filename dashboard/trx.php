<?php
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
  <meta name="csrf-token" content="lUL057FjMpVSHMl1nvYZuVef3gNwWatt9WIIgh2a">
    <title><?php echo $system['sitename']; ?> - History</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Deposit Wallet Transactions">
    
    <meta itemprop="name" content="Megavex-Trade - Deposit Wallet Transactions">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../user/transactions/deposit-wallet">
    
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
            <h2 class="page-title">Plan Transaction</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Plan Transaction</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->    <section class="cmn-section pt-60">
        <div class="container">
            <div class="row justify-content-center mt-2">
                <div class="col-md-12">
                    <div class="table-responsive--md">
                        <table class="table style--two">
                            <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Trx</th>
                                <th scope="col">Plan Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
								<?php $query=mysqli_query($conn, "SELECT * FROM _plantrx WHERE _user='$userid'");
								if(mysqli_num_rows($query)>0){ 
								while($data = mysqli_fetch_array($query)){
								?>
                                <tr>
                                    <td data-label="Date">
                                        <?php echo $data['_date']; ?>
                                    </td>
                                    <td  data-label="Transcation Id"><?php echo $data['_trx']; ?></td>
                                    <td data-label="Plan"><?php echo $data['_name']; ?></td>
                                    <td data-label="Amount"> $<?php echo $data['_amt']; ?></td>
                                    <td data-label="Status">
                                        <strong  class="text-<?php if($data['_stts']=='A'){ echo 'warning'; }else{ echo 'success'; } ?>" > 
                                        <?php if($data['_stts']=='A'){ echo 'Active'; }else{ echo 'Completed'; } ?>
										</strong>
                                    </td>
                                </tr>
								<?php } }else{ ?>
								<tr>
									<td colspan='5'>
										No History Yet!
										
									</td>
                                </tr>
								<?php } ?>
                            </tbody>
                        </table>

                        
                    </div>

                </div>
            </div>
        </div>
    </section>



    

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