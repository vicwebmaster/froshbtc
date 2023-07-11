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
                                    <h3 class="m-0">Ticket</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section" style="overflow-x:auto;">
								<table id="myTable" class="display">
									<thead>
										<tr>
											<th>Client</th>
											<th>Subject</th>
											<th>Message</th>
											<th>Reply</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
									<?php if(is_array(ticket())){ foreach(ticket() as $deposit){ ?>
										<tr>
											<td><?php echo $deposit['_fName']." ".$deposit['_lName']; ?></td>
											<td><?php echo $deposit['_tSubject']; ?></td>
											<td><?php echo $deposit['_tMessage']; ?></td>
											<td><?php echo $deposit['_tReply']; ?></td>
											<td>
												<?php if($deposit['_tReply']==''){ ?>
												<button type="button" class="btn btn-primary" onclick="approve(<?php echo $deposit['_tId']; ?>)">Reply</button> 
												<button type="button" class="btn btn-danger" onclick="_delete(<?php echo $deposit['_tId']; ?>)">Delete</button> 
												<?php } ?>
											</td>
										</tr>
									<?php } } ?>
									</tbody>
								</table>
									
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="reply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Reply</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
			<div>
				<b>Reply:</b> <br>
				<input type="text" value="" id="replyMsg" required class="form-control">
				<input type="number" value="" id="rid" hidden class="form-control">
			</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="saveChanges">Send</button>
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
	});
	
	
	_delete = function(id){
		$.ajax({
			url: 'process/deleteTicket.php',
			method: 'POST',
			dataType: 'json',
			data: {id:id},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Data Deleted!');	
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! Please try again Later.');
				}
			}
		});
	}
	
	approve = function(id){
		$("#rid").val(id);
		$("#reply").modal('show');
	}
	
	
	$("#saveChanges").click(function(){
		var _reply = $("#replyMsg").val();
		var _rid = $("#rid").val();
		$.ajax({
			url: 'process/replyTicket.php',
			method: 'POST',
			dataType: 'json',
			data: {id:_rid,reply:_reply},
			success:function(resp){
				if(resp.status === 1){
					alertify.set('notifier','position', 'top-right');
					alertify.success('Reply Sent!');	
				}else{
					alertify.set('notifier','position', 'top-right');
					alertify.warning('Error! Please try Later.');
				}
			}
		});
	})
</script>

</body>


</html>