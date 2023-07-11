<?php
include "include/config.php";
?>
<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/marketing-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:58 GMT -->
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
    <link rel="stylesheet" href="vendors/font_awesome/css/all.min.css" />
    <!-- datatable CSS -->
    <!-- scrollabe  -->
    <link rel="stylesheet" href="vendors/scroll/scrollable.css" />
    <link href="css/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="alertifyjs/css/alertify.min.css">

    <!-- menu css  -->
    <link rel="stylesheet" href="css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">

    <div class="col-lg-12">
        <div class="white_box mb_30">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <!-- sign_in  -->
                    <div class="modal-content cs_modal">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Admin Log in</h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="uname"
                                        placeholder="Enter your Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="pass" placeholder="********">
                                </div>
                                <a href="javascript:" onclick="login()" class="btn_1 full_width text-center">Log in</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
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
    <script src="js/sweetalert2.min.js"></script>
    <script src="alertifyjs/alertify.min.js"></script>

    <!-- custom js -->
    <script src="js/custom.js"></script>
    <script>
    login = function() {
        var uname = $("#uname").val();
        var pass = $("#pass").val();
        if (uname === "") {
            Swal.fire(
                "Empty Username!",
                "Please enter your email and try again!",
                "error"
            );
        } else if (pass === "") {
            Swal.fire(
                "Empty Password!",
                "Please enter your password and try again!",
                "error"
            );
        } else {
            alertify.set('notifier', 'position', 'top-right');
            alertify.success('Please Wait! Checking Credentials...');
            $.ajax({
                url: 'process/process.php',
                method: 'post',
                dataType: 'json',
                data: {
                    uname: uname,
                    pass: pass
                },
                success: function(resp) {
                    if (resp.status === 1) {
                        window.location.href = "dashboard.php";
                    } else if (resp.status === 0) {
                        Swal.fire(
                            resp.title,
                            resp.message,
                            "error"
                        );
                    } else {
                        Swal.fire(
                            "Error!",
                            "Please try Login in again!",
                            "error"
                        );
                    }
                }
            })
        }
    };
    </script>
</body>

<!-- Mirrored from demo.dashboardpack.com/marketing-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Oct 2021 14:36:58 GMT -->

</html>