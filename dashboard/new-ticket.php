<?php
  include "process/config.php"; 
  require_once "process/conn.php";
  require_once "process/session.php";
    if(isset($_POST['submit'])){
	  
	$m = mysqli_real_escape_string($conn, $_POST['message']);
	$s = mysqli_real_escape_string($conn, $_POST['subject']);
	
	$q=mysqli_query($conn, "insert into _ticket (_user, _tSubject, _tMessage) VALUES ('$userid', '$s', '$m')");
	if(mysqli_affected_rows($conn)>0){
		$msg = "<div class='alert alert-success'>Ticket Created, We will get back to you!</div>";
	}else{
		$msg = "<div class='alert alert-danger'>Network timeout, Try again Shortly!</div>";
	}

  }
?>
<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="i12KtQZmsnoCKXjhu1qN0ppBgqeElVHjZA7Yc2WP">
    <title><?php echo $system['sitename']; ?> - Support Tickets</title>
    <meta name="description" content=""<?php echo $system['sitename']; ?>, Crypto trading, nft, metaverse">
    <meta name="keywords" content="hyip,bitcoin,investment,hyip business,hyip script,advanced hyip script,hyip software,high yield investment program,hyip manager,reliable hyip,hyip program">
    <link rel="shortcut icon" href="../assets/images/logoIcon/favicon.png" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="../assets/images/logoIcon/logo.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Megavex-Trade - Support Tickets">
    
    <meta itemprop="name" content="Megavex-Trade - Support Tickets">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="../assets/images/seo/632da6a7b99391663936167.png">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="Megavex-Trade">
    <meta property="og:description" content="Megavex-Trade">
    <meta property="og:image" content="../assets/images/seo/632da6a7b99391663936167.png"/>
    <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="../ticket/new">
    
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
  
<?php
  require_once "../assets/dash-header.php";
?>

    
    <!-- inner hero start -->
    <section class="inner-hero bg_img" data-background="../assets/images/frontend/breadcrumb/5fce3837032a51607350327.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="page-title">Support Tickets</h2>
            <ul class="page-breadcrumb">
              <li><a href="index">Home</a></li>
              <li>Support Tickets</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- inner hero end -->    <section class="cmn-section">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12 mb-30">
                    <ul class="right">
                        <li>
                            <a href="support" class="btn float-right btn-dark" data-toggle="tooltip" data-placement="top" title="My Support Ticket">
                                <i class="fa fa-eye"></i> See All                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <div class="row mb-60-80">
                    <div class="col-md-12 mb-30">
						<?php if(isset($msg)){ echo $msg; unset($msg); } ?>
                        <form action="new-ticket" role="form" method="post" enctype="multipart/form-data">
							<div class="row ">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text"  value="<?php echo $clientdata['_fName']." ".$clientdata['_lName']; ?>" class="form-control form-control-lg" placeholder="Enter Name" required readonly>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email address</label>
                                    <input type="email" value="<?php echo $clientdata['_uEmail']; ?>" class="form-control form-control-lg" placeholder="Enter your Email" required readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="website">Subject</label>
                                    <input type="text" name="subject" value="" class="form-control form-control-lg" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="inputMessage">Message</label>
                                    <textarea name="message" id="inputMessage" rows="12" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group justify-content-center">
                                <div class="col-md-12">
                                    <button class="btn cmn-btn w-100 bg-3  text-center mt-3" type="submit" id="recaptcha" name="submit">&nbsp;Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    

<?php
  require_once "../assets/dash-footer.php";
?>
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
        $('.extraTicketAttachment').click(function(){
            "use strict";
            $("#fileUploadsContainer").append('<input type="file" name="attachments[]" class="form-control my-3" required />')
        });
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