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
                                    <h3 class="m-0">View, Add and Edit Plan</h3>
                                </div>
									<button class="btn btn-primary" data-toggle="modal" data-target="#add">Add New Plan</button>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section" style="overflow-x:auto;">
								<table id="myTable" class="display">
									<thead>
										<tr>
											<th>Name</th>
											<th>Days</th>
											<th>Minimum Amt</th>
											<th>Maximum Amt</th>
											<th>%</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php foreach(plans() as $data){ ?>
										<tr>
											<td><?php echo $data['_planName']; ?></td>
											<td><?php echo $data['_day']; ?></td>
											<td><?php echo $data['_minAmt']; ?></td>
											<td><?php echo $data['_maxAmt']; ?></td>
											<td><?php echo $data['_return']; ?></td>
											<td>
												<button type="button" class="btn btn-success" onclick="edit(<?php echo $data['id']; ?>)">Edit</button> 
												<button type="button" class="btn btn-danger" onclick="_delete(<?php echo $data['id']; ?>)">Delete</button> 
													
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
<!-- Edit Plan Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
			<div>
				<b>Plan Name:</b> <br>
				<input type="text" value="" id="name" required class="form-control">
			</div><br>
			<div>
				<b>Number of Days the Plan should Last:</b> <br>
				<input type="number" value="" id="days" required class="form-control">
			</div><br>
			<div>
				<b>Minimum Amount for the Plan ($):</b> <br>
				<input type="number" value="" id="min" required class="form-control">
			</div><br>
			<div>
				<b>Maximum Amount for the Plan ($):</b> <br>
				<input type="number" value="" id="max" required class="form-control">
			</div><br>
			<div>
				<b>Percentage to be earned at the End of the Plan (%):</b> <br>
				<input type="number" value="" id="percentage" required class="form-control">
				<input type="number" value="" id="Pid" hidden class="form-control">
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveChanges">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
  
  
<!-- Add Plan Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
			<div>
				<b>Plan Name:</b> <br>
				<input type="text" placeholder="Plan Name" id="pName" required class="form-control">
			</div><br>
			<div>
				<b>Number of Days the Plan should Last:</b> <br>
				<input type="number" placeholder="1" id="pDays" required class="form-control">
			</div><br>
			<div>
				<b>Minimum Amount for the Plan ($):</b> <br>
				<input type="number" placeholder="100" id="pMin" required class="form-control">
			</div><br>
			<div>
				<b>Maximum Amount for the Plan ($):</b> <br>
				<input type="number" placeholder="1000" id="pMax" required class="form-control">
			</div><br>
			<div>
				<b>Percentage to be earned at the End of the Plan (%):</b> <br>
				<input type="number" placeholder="10" id="pPercentage" required class="form-control">
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="create">Create Plan</button>
        </div>
      </div>
    </div>
  </div>
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
		Swal.fire({
			title: 'Confirm Delete.',
			text: 'Are you sure you want to Delete?',
			icon: 'info',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, Delete!',
		}).then((result) => {
			if(result.isConfirmed){
				$.ajax({
				url: 'process/deletePlan.php',
				method: 'POST',
				dataType: 'json',
				data: {id:id},
				success:function(resp){
					if(resp.status === 1){
						alertify.set('notifier','position', 'top-right');
						alertify.success('Plan Deleted!');	
					}else{
						alertify.set('notifier','position', 'top-right');
						alertify.warning('Error! Please try again Later.');
					}
				}
			});
			}
		})
		
	}
	
	edit = function(id){
		$.ajax({
			url: 'process/fetchPlan.php',
			method: 'POST',
			dataType: 'json',
			data: {id:id},
			success:function(resp){
				if(resp.status === 1){
					$("#name").val(resp.name);
					$("#days").val(resp.days);
					$("#min").val(resp.min);
					$("#max").val(resp.max);
					$("#Pid").val(resp.id);
					$("#percentage").val(resp.percentage);
					$("#edit").modal('show');
				}
			}
		});
	}
	
	$("#saveChanges").click(function(){
		var _name = $("#name").val();
		var days = $("#days").val();
		var min = $("#min").val();
		var max = $("#max").val();
		var pid = $("#Pid").val();
		var percentage = $("#percentage").val();
		$.ajax({
			url: 'process/editPlan.php',
			method: 'POST',
			dataType: 'json',
			data: {pid:pid, _name:_name, days:days, min:min, max:max, percentage:percentage},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Plan Saved!');
					$("#edit").modal('hide');
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! ' + resp.message);
				}
			}
		});
	});
	
	
	$("#create").click(function(){
		var _name = $("#pName").val();
		var days = $("#pDays").val();
		var min = $("#pMin").val();
		var max = $("#pMax").val();
		var percentage = $("#pPercentage").val();
		$.ajax({
			url: 'process/createPlan.php',
			method: 'POST',
			dataType: 'json',
			data: {_name:_name, days:days, min:min, max:max, percentage:percentage},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Plan Saved!');
					$("#add").modal('hide');
					setTimeout(location.reload(), 5000);
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! ' + resp.message);
				}
			}
		});
	});
</script>

</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/data_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:32 GMT -->
</html>