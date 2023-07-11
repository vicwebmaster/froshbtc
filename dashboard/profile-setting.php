<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
?><!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="3ZYuh4Acwa7HLOFeaPbetLV1OebW5SlhZOcMVhxK">
  <title><?php echo $system['sitename']; ?> - Profile Setting</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Dashboard">
    
    <meta itemprop="name" content="Megavex-Trade - Dashboard">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../user/dashboard">
    
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
  
  <link rel="stylesheet" href="../assets/templates/bit_gold/css/sweetalert2.min.css">
  <style type="text/css">
  #copyBoard{
    cursor: pointer;
  }
</style>
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
<?php
  require_once "../assets/dash-header.php";
?>

    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Profile Setting</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Profile Setting</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end --><section class="cmn-section">
    <div class="container">
            <div class="card">
                <form id="_send" enctype="multipart/form-data">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
								<input type='file' name="image" id="previewimage" class="upload" accept=".png, .jpg, .jpeg"/>
								<img id="targetimage" src="<?php if($clientdata['_Pic']==''){ echo '../assets/images/default.png'; }else{ echo 'pic/'.$clientdata['_Pic']; } ?>" class="rounded" alt="your image will show here" width="200" />
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" class="form-control form-control-lg" placeholder="First Name" value="<?php echo $clientdata['_fName']; ?>" required>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Last Name" value="<?php echo $clientdata['_lName']; ?>" required>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Username" value="<?php echo $clientdata['_userName']; ?>" readonly>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Email" value="<?php echo $clientdata['_uEmail']; ?>" readonly>        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Mobile" value="<?php echo $clientdata['_uPhone']; ?>" disabled>        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <input type="text" class="form-control" value="<?php echo $clientdata['_country']; ?>" disabled>    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control form-control-lg" placeholder="Address" value="<?php echo $clientdata['_addr']; ?>" >        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input type="text" name="state" class="form-control form-control-lg" placeholder="State" value="<?php echo $clientdata['_state']; ?>" >        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Zip</label>
                                        <input type="text" name="zip" class="form-control form-control-lg" placeholder="Zip" value="<?php echo $clientdata['_zip']; ?>" >        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" name="city" class="form-control form-control-lg" placeholder="City" value="<?php echo $clientdata['_city']; ?>" >        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" id="regBtn" class="btn btn-md w-100 cmn-btn">Update</button>
                    <button type="button" id="loading" style="display:none" class="btn btn-md w-100 cmn-btn"><i class="fa fa-spinner fa-spin"></i></button>
                </div>
                </form>
            </div>
        </div>
</section>

<!-- footer section start -->
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
<script src="../assets/templates/bit_gold/js/sweetalert2.min.js"></script>
<script>
  $("#_send").submit(function(e){
      e.preventDefault();
      $("#regBtn").hide();
      $("#loading").show();
      $.ajax({
          url:'process/update-profile.php',
          method: 'POST',
          dataType: 'JSON',
          data: new FormData(this),
          contentType: false,
          processData: false,
          success:function(resp){
            $("#loading").hide();
            $("#regBtn").show();
            if(resp.status===1){
              Swal.fire({
                title: 'Success!',
                text: 'Profile Successfully Updated!',
                icon: 'success',
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
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#targetimage').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#previewimage").change(function() {
  readURL(this);
});
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
        $('.imgUp').click(function(){
            upload();
        });
        function upload(){
            $(".upload").change(function() {
                readURL(this);
            });
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var preview = $(input).parents('.avatar-upload').find('.imagePreview');
                    $(preview).css('background-image', 'url('+e.target.result +')');
                    $(preview).hide();
                    $(preview).fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('select[name=country]').val('Nigeria');
    })(jQuery);
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