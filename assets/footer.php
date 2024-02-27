<footer class="footer bg_img" data-background="assets/images/frontend/footer/5fce39681ce6b1607350632.jpg">
  <div class="footer__top">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12 text-center">
          <a href="index.php"><img src="assets/images/logoIcon/logo.png" alt="image"></a>
          <ul class="footer-short-menu d-flex flex-wrap justify-content-center mt-3">
                        <li><a href="policy">Privacy &amp; Policy</a></li>
                        <li><a href="terms">Terms &amp; Condition</a></li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-md-left text-center">
          <p><p>© 2010-<?= date('Y') ?> <a href="index" class="base--color"><?php echo $system['sitename']; ?></a>. All rights reserved</p></p>
        </div>
        <div class="col-md-6">
          <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
                        <li><a href="https://facebook.com/"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com/"><i class="lab la-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/"><i class="lab la-pinterest-p"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="lab la-linkedin-in"></i></a></li>
                      </ul>
        </div>
      </div>
    </div>
  </div>
</footer>























 
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"  >
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600');
.custom-social-proof {
    position: fixed;
    top: 20px;
    left: 50%;
    z-index: 9999999999999 !important;
  font-family: 'Open Sans', sans-serif;
   
    .custom-notification {
        width: 400px;
        border: 0;
        text-align: left;
        z-index: 99999;
        box-sizing: border-box;
        font-weight: 400;
        border-radius: 6px;
        box-shadow: 2px 2px 10px 2px hsla(0, 4%, 4%, 0.2);
        background-color: #fff;
        position: relative;
        cursor: pointer;
        .custom-notification-container {
            display: flex !important;
            align-items: center;
            height: 80px;
            .custom-notification-image-wrapper {
                img {
                    max-height: 75px;
                    width: 90px;
                    overflow: hidden;
                    border-radius: 6px 0 0 6px;
                    object-fit: cover;
                }
            }
            .custom-notification-content-wrapper {
                margin: 0;
                height: 100%;
                color: gray;
                padding-left: 20px;
                padding-right: 20px;
                border-radius: 0 6px 6px 0;
                flex: 1;
                display: flex !important;
                flex-direction: column;
                justify-content: center;
                .custom-notification-content {
                    font-family: inherit !important;
                    margin: 0 !important;
                    padding: 0 !important;
                    font-size: 14px;
                    line-height: 16px;
                    small {
                        margin-top: 3px !important;
                        display: block !important;
                        font-size: 12px !important;
                        opacity: .8;
                    }
                }
            }
        }
        .custom-close {
            position: absolute;
            top: 8px;
            right: 8px;
            height: 12px;
            width: 12px;
            cursor: pointer;
            transition: .2s ease-in-out;
            transform: rotate(45deg);
            opacity: 0;
            &::before {
                content: "";
                display: block;
                width: 100%;
                height: 2px;
                background-color: gray;
                position: absolute;
                left: 0;
                top: 5px;
            }
            &::after {
                content: "";
                display: block;
                height: 100%;
                width: 2px;
                background-color: gray;
                position: absolute;
                left: 5px;
                top: 0;
            }
        }
        &:hover {
            .custom-close {
                opacity: 1;
            }
        }
    }
}

.poweredby{
    font-weight: 600;
    text-decoration: none;
    margin-left: 3px;
    color:  #3498db;
}
    </style>


    <section class="custom-social-proof">
    <div class="custom-notification">
      <div class="custom-notification-container">
        <div class="custom-notification-image-wrapper">
          <img id="map1" src="assets/images/logoIcon/logo.png" style="width: 50px; height: 50px">
        </div>
        <div class="custom-notification-content-wrapper">
          <p class="custom-notification-content">
             <span id="name">Victor</span> from <span id="country"> US</span> has earned $<span id="amount">4000</span>
            <small>
            
              <span id="time">1</span> hour ago &nbsp; 
              <i class="fa fa-check-circle"></i> <a class="poweredby" href="./login">Login Now</a>
            </small>
          </p>
        </div>
      </div>
      <div class="custom-close"></div>
    </div>
  </section>

  <script>
    var x = new Array();
    var y = new Array();
    var z = new Array();
    x= ["Dirk", "Johnny", "Watkin ", "Alejandro",  "Vina",  "Tony",   "Ahmed","Jackson",  "Noah", "Aiden",  "Darren", "Isabella", "Aria", "John", "Greyson", "Peter", "Mohammed", "William",
        "Lucas", "Amelia", "Mason", "Mathew", "Richard", "Chris", "Mia", "Oliver"];
        y= ["USA","UAE","ITALY", "FLORIDA",  "MEXICO",  "INDIA",  "CHINA",  "CAMBODIA",  "UNITED KINGDOM",  "GERMANY", "AUSTRALIA",  "BANGLADESH", "SWEDEN", "PAKISTAN", "MALDIVES", "SEYCHELLES", 
        "BOLIVIA",
         "SOUTH AFRICA", "ZAMBIA", "ZIMBABWE", "LEBANESE", "SAUDI ARABIA", "CHILE", "PEUTO RICO"];
        
        z= [10000, 2500,555,666,444,333,8000];
      
setInterval(function(){ $(".custom-social-proof").stop().slideToggle('slow'); }, 3000);
$(".custom-close").click(function() {
  $(".custom-social-proof").stop().slideToggle('slow');
});

setInterval(function(){    
      var myNumber = Math.floor(7*Math.random());
 			$('#country').text(y[myNumber]);
 			$('#amount').text(z[Math.floor(7*Math.random())]);

      $('#name').text(x[Math.floor(7*Math.random())]);
 			var timeVal = Math.floor(7*Math.random());
 	
 			$('#time').text(timeVal);
 		
 		 
    //  console.log(timeVal); 
 }, 6000);
  </script>