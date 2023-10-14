<?php
	include "include/config.php";
	include "include/session.php";
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
     <!-- scrollabe  -->
     <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="vendors/datatable/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" />
    <!-- text editor css -->

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript">// <![CDATA[
	function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
	}
	// ]]></script>
	<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
	<link href="css/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">
</head>
<body class="crm_body_bg">
    


 <!-- sidebar part here -->
 <?php include "side-bar.php"; ?>
 <!-- sidebar part end -->
  <!--/ sidebar  -->
  
  
  <section class="main_content dashboard_part large_header_bg">
        <!-- menu  -->
		<?php include "top-bar.php"; ?>
		<!--/ menu  -->
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Deposit Request</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section" style="overflow-x:auto;">
								<table id="myTable" class="display">
									<thead>
										<tr>
											<th>Name</th>
											<th>Amount</th>
											<th>Coin</th>
											<th>Transaction ID</th>
											<th>Hash/ID</th>
											<th>Status</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach(fetchDeposit() as $deposit){ ?>
										<tr>
											<td><?php echo $deposit['_fName']." ".$deposit['_lName']; ?></td>
											<td>$<?php echo $deposit['hAmt']; ?></td>
											<td><?php echo $deposit['hGateway']; ?></td>
											<td><?php echo $deposit['hTrx']; ?></td>
											<td><?php echo $deposit['hLink']; ?></td>
											<td><?php 
												if($deposit['hStatus'] == "Pending"){ ?>
													<div class="badge badge-primary">Pending</div>
												<?php }else if($deposit['hStatus'] == "Approved"){ ?>
													<div class="badge badge-success">Approved</div>
												<?php } ?>
											</td>
											<td><?php echo $deposit['hDate']; ?></td>
											<td>
												
												<?php if($deposit['hStatus'] == "Pending"){ ?>
													<button type="button" class="btn btn-primary" onclick="approve(<?php echo $deposit['hId']; ?>)">Approve</button> 
													<button type="button" class="btn btn-danger" onclick="_delete(<?php echo $deposit['hId']; ?>)">Delete</button> 
													
												<?php }
											?>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
									
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
<!-- footer  -->
<!-- jquery slim -->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="js/metisMenu.js"></script>

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

<!-- scrollabe  -->
<script src="vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="vendors/scroll/scrollable-custom.js"></script>

<!-- custom js -->
<script src="js/custom.js"></script>
  <script src="js/sweetalert2.min.js"></script>
<script src="alertifyjs/alertify.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
	
	
	_delete = function(id){
		$.ajax({
			url: 'process/deleteDeposit.php',
			method: 'POST',
			dataType: 'json',
			data: {id:id},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Deposit successfully Deleted!');	
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! Please try again Later.');
				}
			}
		});
	}
	
	approve = function(id){
		$.ajax({
			url: 'process/approveDeposit.php',
			method: 'POST',
			dataType: 'json',
			data: {id:id},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Deposit successfully Approved!');	
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! Please try Approving Later.');
				}
			}
		});
	}
</script>

</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:32 GMT -->
</html>