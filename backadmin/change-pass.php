<?php
include "include/config.php";
	include "include/session.php";
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/marketing-html/dargable_card.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>

    <link rel="icon" href="../images/logo.png" type="image/png">
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
    <!-- text editor css -->

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />

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
            <div class="container-fluid p-0 sm_padding_15px">
                <div class="row">
                    <div class="col-12">
                        <div class="dashboard_header mb_50">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="dashboard_header_title">
                                        <h3></h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="dashboard_breadcam text-right">
                                        <p><a href="index">Dashboard</a> <i class="fas fa-caret-right"></i>Change Password</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="planDiv">
                        <div class="card_box position-relative  mb_30 white_bg  ">
                            <div class="white_box_tittle parpel_bg">
                                <div class="main-title2">
                                    <h4 class="mb-2 nowrap text_white" id="planName">Change Password</h4>
                                </div>
                            </div>

                            <div class="box_body single_wow_amin wow slideInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                                <div class="row">
                                    <div class="col s12" id="response" style="display:none">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="inputState">Current Password</label><br>
                                        <input type="password" class="form-control" id="pass" placeholder="********">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputState">New Password</label><br>
                                        <input type="password" class="form-control" id="cpass" placeholder="********">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="inputState">Confirm New Password</label><br>
                                        <input type="password" class="form-control" id="cnewpass" placeholder="********">
                                    </div>
                                </div><br>
                                <center><button class="btn btn-success" id="changePass">Change Password</button></center>
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
    <!-- footer  -->
    <!-- jquery slim -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstarp js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- sidebar menu  -->
    <script src="js/metisMenu.js"></script>
    <!-- scrollabe  -->
    <script src="vendors/scroll/perfect-scrollbar.min.js"></script>
    <script src="vendors/scroll/scrollable-custom.js"></script>
    <!-- drageable  -->
    <script src="vendors/drag/jquery.ui.min.js"></script>
    <script src="vendors/drag/dragable_sortable.js"></script>
    <script src="vendors/drag/sortable-custom.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script src="alertifyjs/alertify.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
        $("#changePass").click(function() {
            $("#response").css({
                "background-color": "royalblue",
                "color": "black"
            }).html('Please Wait! Processing...');
            $("#response").show();
            var pass = $("#pass").val();
            var cpass = $("#cpass").val();
            var cnewpass = $("#cnewpass").val();
            $.ajax({
                url: 'process/changePass.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    pass: pass,
                    newpass: cpass,
                    cnewpass: cnewpass
                },
                success: function(resp) {
                    if (resp.status === 1) {
                        $("#response").css({
                            "background-color": "green",
                            "color": "white"
                        }).html('Password Changed!');
                        $("#response").show();
                        $("#title").val('');
                        $("#_msg").val('');
                    } else {
                        $("#response").css({
                            "background-color": "red",
                            "color": "white"
                        }).html(resp.message);
                        $("#response").show();
                    }
                }
            });
        });

    </script>
</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/dargable_card.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:34 GMT -->

</html>
