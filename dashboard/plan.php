<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
?>

<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="RjewJ7FbUGqKO9kPxi3G8VMYIu84PptVCtxZdt8H">
  <title><?php echo $system['sitename']; ?> - Plan</title>
    <meta name="description" content="<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Home">
    
    <meta itemprop="name" content="<?php echo $system['sitename']; ?> - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="index">
    
    <meta name="twitter:card" content="summary_large_image">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/line-awesome.min.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/vendor/slick.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/vendor/dots.css">
      <!-- dashdoard main css -->
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/main.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/custom.css">
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/color9bce.css?color=CCA354&amp;secondColor=000000">
  
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/sweetalert2.min.css">
  <?php include "../chat.php"; ?>
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
  require_once "../assets/dash-header.php";
?>
  <!-- header-section end  -->

    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      
    <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Investment Plan</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Investment Plan</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->


    <section class="pt-120 pb-120">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="section-header">
              <h2 class="section-title"><span class="font-weight-normal">Investment</span> <b class="base--color">Plans</b></h2>
              <p>To make a solid investment, you have to know where you are investing. Find a plan which is best for you.</p>
            </div>
          </div>
        </div><!-- row end -->

        <div class="row mb-none-30 justify-content-center">
          <?php $planQuery = mysqli_query($conn, "SELECT * FROM _plan WHERE _status='A'") or die(mysqli_error($conn));
            while ($planData = mysqli_fetch_array($planQuery)) {
          ?>

          <div class="col-xl-3 col-lg-4 col-md-6 mb-30">
            <div class="package-card text-center bg_img" data-background="../assets/templates/bit_gold/images/bg/bg-4.png">
              <h4 class="package-card__title base--color mb-2"><?php echo $planData['_planName']; ?></h4>
              
              <ul class="package-card__features mt-4">
                <li>Return <?php echo $planData['_return']; ?>%</li>
                <li> Every Day</li>
                <li>For <?php echo $planData['_day'];?>  Day(s) </li>
                <li>Total <?php echo $planData['_return']*$planData['_day']; ?>% + <span class="badge badge-success">Capital</span>  </li>
              </ul>

              <div class="package-card__range mt-5 base--color"> $<?php echo $planData['_minAmt'];?>  - $<?php echo $planData['_maxAmt']; ?></div>
              <a type="button" class="cmn-btn btn-md mt-4 investButton" id="_planBtn" onclick="_showModal(<?php echo $planData['id']; ?>)">Invest Now</a>
            </div><!-- package-card end -->
          </div>
            <?php } ?>
			<div class="col-12 alert alert-info" id="divMsg" style="display:none">
				Please Wait...
			</div>
      </div>
    </section>
    
    
<!-- Modal -->
<div class="modal fade" id="depoModal" role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-bg">
            <div class="modal-header">
                <strong class="modal-title text-white" id="ModalLabel">
					Confirm to Invest on <a id="planName"></a>
				</strong>
                <a href="javascript:void(0)" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <form action="#" method="post" class="register pl-5 pr-5">
				<p class="text-center">Invest $<a id="min"></a>-$<a id="max"></a></p>
				<p class="text-center">Interest: <a id="interest"></a>%</p>
				<p class="text-center">Per <a id="day"></a>Day(s)</p>
				<p class="text-center">Your Balance = <?php echo $clientdata['_totalBal']; ?></p>
				<div class="form-group">
					
				<input type="number" class="form-control" id="amt" placeholder="Enter Amount">
				<input type="number" id="_id" hidden>
				</div>           
                 <div class="modal-footer">
                    <a href="javascript:" type="button" id="startPlan"
                    class="cmn-btn btn-md w-100 text-center">Invest Now</a>
                    <a href="javascript:" type="button" style="display:none" id="loading"
                    class="cmn-btn btn-md w-100 text-center"><i class="fa fa-spinner fa-spin"></i></a>
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
  <script src="../assets/templates/bit_gold/js/vendor/jquery-3.5.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="../assets/templates/bit_gold/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- slick slider js -->
  <script src="../assets/templates/bit_gold/js/vendor/slick.min.js"></script>
  <script src="../assets/templates/bit_gold/js/vendor/wow.min.js"></script>
  <!-- dashboard custom js -->
  <script src="../assets/templates/bit_gold/js/app.js"></script>


  <link rel="stylesheet" href="../assets/templates/bit_gold/css/iziToast.min.css">
<script src="../assets/templates/bit_gold/js/iziToast.min.js"></script>
<script src="../assets/templates/bit_gold/js/sweetalert2.min.js"></script>

<script>
	_showModal = function(id){
		$("#divMsg").show();
		$.ajax({
			url:'process/getPlanDetails.php',
			method:'POST',
			dataType:'JSON',
			data:{id:id},
			success:function(resp){
				$("#divMsg").hide();
				if(resp.status===1){
					$("#_id").val(id);
					$("#planName").html(resp.name);
					$("#min").html(resp.min);
					$("#max").html(resp.max);
					$("#day").html(resp.day);
					$("#interest").html(resp.return);
					$("#depoModal").modal('show');
				}
			}
		})
	}
	
	$("#startPlan").click(function(){
		$("#startPlan").hide();
		$("#loading").show();
		var id = $("#_id").val();
		var amt = $("#amt").val();
		$.ajax({
			url:'process/startPlan.php',
			method:'POST',
			dataType:'JSON',
			data:{id:id, amt:amt},
			success:function(resp){
				$("#loading").hide();
				$("#startPlan").show();
				if(resp.status===1){
					Swal.fire({
						title: 'Success!',
						text: 'Plan has been Activated!',
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
    (function ($) {
        "use strict";
        $(document).on('click','.investButton',function () {
            var data = $(this).data('resource');
            var symbol = "$";
            var currency = "USD";

            $('#mySelect').empty();

            if (data.fixed_amount == '0') {
                $('.investAmountRenge').text(`invest: ${symbol}${data.minimum} - ${symbol}${data.maximum}`);
                $('.fixedAmount').val('');
                $('#fixedAmount').attr('readonly', false);


            } else {
                $('.investAmountRenge').text(`invest: ${symbol}${data.fixed_amount}`);
                $('.fixedAmount').val(data.fixed_amount);
                $('#fixedAmount').attr('readonly', true);

            }

            if (data.interest_status == '1') {
                $('.interestDetails').html(`<strong> Interest: ${data.interest} % </strong>`);
            } else {
                $('.interestDetails').html(`<strong> Interest: ${data.interest} ${currency}  </strong>`);
            }
            if (data.lifetime_status == '0') {
                $('.interestValidaty').html(`<strong>  per ${data.times} hours ,  ${data.repeat_time} times</strong>`);
            } else {
                $('.interestValidaty').html(`<strong>  per ${data.times} hours,  life time </strong>`);
            }

            $('.planName').text(data.name);
            $('.plan_id').val(data.id);
        });



    })(jQuery);

</script>

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

<!-- Mirrored from bethertrade.com/plan by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Oct 2022 11:36:22 GMT -->
</html>

  </body>
</html> 