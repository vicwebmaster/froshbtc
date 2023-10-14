<?php
	include "include/config.php";
	include "include/session.php";
?>
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/marketing-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:18 GMT -->
<!-- Added by HTTrack -->
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
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	
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
                                    <h3 class="m-0">Fund User</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
											<label for="inputEmail4">Select Client to Fund</label>
												<select id="single" class="js-states form-control">
													<?php foreach(fetchUsers() as $clients){ ?>
													<option value="<?php echo $clients['_uId']; ?>"><?php echo $clients['_fName']." ".$clients['_lName']; ?></option>
													<?php } ?>
												</select> 
											</div>
										</div><hr>
									<div class="form-group">
										<label for="inputState">Amount</label>
										<input type="number" id="amt" class="form-control" placeholder="Amount to Fund">
									</div>
                                    
                                    <button type="button" id="fundBTN" onclick="fund()" class="btn btn-primary">Fund</button>
                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
      $("#single").select2({
          placeholder: "Select Client To Fund",
          allowClear: true
      });
	  
	  
	  fund = function(){
          $('#fundBTN').prop("disabled", true);
			var single = $("#single").val();
			var amt = $("#amt").val();
			alertify.set('notifier','position', 'top-right');
				alertify.success('Processing...');
				$.ajax({
					url: 'process/fund.php',
					method: 'post',
					dataType: 'json',
					data:{single:single, amt:amt},
					success:function(resp){
                        $('#fundBTN').prop("disabled", false);
						if(resp.status === 1){
							Swal.fire(
							resp.title, 
							resp.message, 
							"success"
							);
						}else{
							Swal.fire(
							resp.title, 
							resp.message, 
							"error"
							);
						}
					}	
				})
			}
	  
    </script>
  

  </body>
  
<!-- Mirrored from demo.dashboardpack.com/marketing-html/Layouts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:18 GMT -->
</html>