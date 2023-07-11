<?php
	include "include/config.php";
	include "include/session.php";
	if(isset($_POST['save'])){
		$btc=mysqli_real_escape_string($conn, $_POST['btc']);
		$bnb=mysqli_real_escape_string($conn, $_POST['bnb']);
		$usdt=mysqli_real_escape_string($conn, $_POST['usdt']);
		$trx=mysqli_real_escape_string($conn, $_POST['trx']);
		$eth=mysqli_real_escape_string($conn, $_POST['eth']);
		if(empty($btc) or empty($bnb) or empty($usdt) or empty($trx) or empty($eth)){
			$msg = "<div class='alert alert-danger'>Please Fill all Fields</div>";
		}else{
			$query2 = mysqli_query($conn, "UPDATE _admin SET TRN='$trx', BTC='$btc', BNB='$bnb', USDT='$usdt', ETH='$eth' WHERE A_Id=2");
			if(mysqli_affected_rows($conn)){
				$msg = "<div class='alert alert-success'>Payment Wallet Address Updated Successfully</div>";
			}else{
				$msg = "<div class='alert alert-danger'>Error Updating Data</div>";
			}
		}
	}
	$query=mysqli_query($conn, "SELECT * FROM _admin");
	$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>

    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="vendors/themefy_icon/themify-icons.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="vendors/tagsinput/tagsinput.css" />

    <!-- date picker -->
     <link rel="stylesheet" href="vendors/datepicker/date-picker.css" />
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
	
	<link href="css/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
</head>
<body class="crm_body_bg">
<!-- main content part here -->
 
 <!-- sidebar  -->
 <!-- sidebar part here -->
<?php include "side-bar.php"; ?>
<!-- sidebar part end -->
 <!--/ sidebar  -->


<section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
    <?php include "top-bar.php"; ?>
	<!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Site Settings</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
						<form method="POST" action="settings">
                            <div class="card-body">
							<?php if(isset($msg)){ echo $msg; unset($msg); } ?>
									<div class="form-group">
										<label for="inputState">Site BTC Address</label>
										<input type="text" name="btc" class="form-control" value="<?php echo $data['BTC']; ?>">
									</div>
									<div class="form-group" style="display:none">
										<label for="inputState">Site USDT Address</label>
										<input type="text" name="usdt" class="form-control" value="<?php echo $data['USDT']; ?>">
									</div>
									<div class="form-group">
										<label for="inputState">Site ETHEREUM Address</label>
										<input type="text" name="eth" class="form-control" value="<?php echo $data['ETH']; ?>">
									</div>
									<div class="form-group">
										<label for="inputState">Site TRON Address</label>
										<input type="text" name="trx" class="form-control" value="<?php echo $data['TRN']; ?>">
									</div>
									<div class="form-group">
										<label for="inputState">Site BNB Address</label>
										<input type="text" name="bnb" class="form-control" value="<?php echo $data['BNB']; ?>">
									</div>
                                    
                                    <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </div>
						</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- footer part -->
<?php include "footer.php"; ?>
</section>
<!-- main content part end -->
<div id="back-top" style="display: none;">
    <a title="Go to Top" href="javascript:">
        <i class="ti-angle-up"></i>
    </a>
  </div>
  
  <!-- footer  -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstarp js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- sidebar menu  -->
  <script src="js/metisMenu.js"></script>
  <!-- waypoints js -->
  <script src="vendors/count_up/jquery.waypoints.min.js"></script>
  <!-- waypoints js -->
  <script src="vendors/chartlist/Chart.min.js"></script>
  <!-- counterup js -->
  <script src="vendors/count_up/jquery.counterup.min.js"></script>
  
  <!-- nice select -->
  <script src="vendors/niceselect/js/jquery.nice-select.min.js"></script>
  <!-- owl carousel -->
  <script src="vendors/owl_carousel/js/owl.carousel.min.js"></script>
  
  <!-- responsive table -->
  <script src="vendors/datatable/js/jquery.dataTables.min.js"></script>
  <script src="vendors/datatable/js/dataTables.responsive.min.js"></script>
  <script src="vendors/datatable/js/dataTables.buttons.min.js"></script>
  <script src="vendors/datatable/js/buttons.flash.min.js"></script>
  <script src="vendors/datatable/js/jszip.min.js"></script>
  <script src="vendors/datatable/js/pdfmake.min.js"></script>
  <script src="vendors/datatable/js/vfs_fonts.js"></script>
  <script src="vendors/datatable/js/buttons.html5.min.js"></script>
  <script src="vendors/datatable/js/buttons.print.min.js"></script>
  
  
  <script src="js/chart.min.js"></script>
  <!-- progressbar js -->
  <script src="vendors/progressbar/jquery.barfiller.js"></script>
  <!-- tag input -->
  <script src="vendors/tagsinput/tagsinput.js"></script>
  <!-- text editor js -->
  <script src="vendors/text_editor/summernote-bs4.js"></script>
  <script src="vendors/am_chart/amcharts.js"></script>
  
  <!-- scrollabe  -->
  <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
  <script src="vendors/scroll/scrollable-custom.js"></script>
  
  
  <script src="vendors/chart_am/core.js"></script>
  <script src="vendors/chart_am/charts.js"></script>
  <script src="vendors/chart_am/animated.js"></script>
  <script src="vendors/chart_am/kelly.js"></script>
  <script src="vendors/chart_am/chart-custom.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <script src="js/sweetalert2.min.js"></script>
<script src="alertifyjs/alertify.min.js"></script>
  <script>
	$("#save").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var address = $("#address").val();
		var min = $("#min").val();
		var phone = $("#phone").val();
		var referral = $("#referral").val();
		var wFee = $("#wFee").val();
		$.ajax({
			url: 'process/update_site_settings.php',
			method: 'POST',
			dataType: 'json',
			data: {name:name, email:email, address:address, min:min, phone:phone, referral:referral, wFee:wFee},
			success:function(resp){
				if(resp.status == 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Changed Saved!');	
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! '+resp.message);	
				}
			}
		});
	});
  </script>

  </body>
  
<!-- Mirrored from demo.dashboardpack.com/marketing-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:18 GMT -->
</html>