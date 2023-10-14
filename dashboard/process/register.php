<?php
//  function send_mail($email, $message, $subject){
//        // Always set content-type when sending HTML email
//        $headers = "MIME-Version: 1.0" . "\r\n";
//        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//
//        // More headers
//        $headers .= 'From: <admin@prymecapitals.com>' . "\r\n";
//
//        return mail($email,$subject,$message,$headers) ? 1 : 0;
//    }



$subject = "Welcome to Pryme Capitals";
               

  

    session_start();
    include "conn.php";
    include "function.php";
    include "config.php";
    if(isset($_POST['firstname'])){
        $fName = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lName = mysqli_real_escape_string($conn, $_POST['lastname']);
        $Country = mysqli_real_escape_string($conn, $_POST['country']);
        $uPhone = mysqli_real_escape_string($conn, $_POST['mobile_code']);
        $Phone = mysqli_real_escape_string($conn, $_POST['mobile']);
        $mobile =  $uPhone . $Phone; 
        $uEmail = mysqli_real_escape_string($conn, $_POST['email']);
        $userName = mysqli_real_escape_string($conn, $_POST['username']);
        $uPassword = mysqli_real_escape_string($conn, $_POST['password']);
        $captcha = mysqli_real_escape_string($conn, $_POST['captcha']);
        $confirmPassword = mysqli_real_escape_string($conn, $_POST['password_confirmation']);
		if(isset($_SESSION['refer'])){
			$refer=$_SESSION['refer'];
		}else{
			$refer="";
		}
        if(empty($fName) or empty($lName) or empty($Country) or empty ($uPhone) or empty($captcha) or empty($uEmail) or empty($Phone) or empty($userName) or empty($uPassword) or empty($confirmPassword) ){
            print json_encode(array(
                'status'=>0,
                'message'=>"Please Fill all Field",
            ));
        }elseif($confirmPassword !=$uPassword){
            print json_encode(array(
                'status'=>0,
                'message'=>"Password Mismatch!",
            ));
        }else if(!filter_var($uEmail, FILTER_VALIDATE_EMAIL)){
            print json_encode(array(
                 'status'=>0,
               'message'=>"Invalid Email Address",
            ));
        }else if(strlen($captcha)!=6){
            print json_encode(array(
                'status'=>0,
                'message'=>"Wrong CAPTCHA Provided!",
            ));
        }else if(strlen($uPassword)<8){
            print json_encode(array(
                'status'=>0,
                'message'=>"Password Length Must be atleast 8 Characters!",
            ));
        }else if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $uPassword)){
            print json_encode(array(
                'status'=>0,
                'message'=>"Password Should Contain atleast one Special Character",
            ));
        }else if(!preg_match('/[A-Z]/', $uPassword)){
            print json_encode(array(
                'status'=>0,
                'message'=>"Password Should Contain an Uppercase",
            ));
        }else if(checkUsername($userName)==1){
            print json_encode(array(
                'status'=>0,
                'message'=>"Username has been Taken!!",
            ));
        }else if($_SESSION['captcha']['no1']!=substr($captcha, 0, 1) or $_SESSION['captcha']['no2']!=substr($captcha, 1, 1) or $_SESSION['captcha']['no3']!=substr($captcha, 2, 1) or $_SESSION['captcha']['no4']!=substr($captcha, 3, 1) or $_SESSION['captcha']['no5']!=substr($captcha, 4, 1) or $_SESSION['captcha']['no6']!=substr($captcha, 5, 1)){
            print json_encode(array(
                'status'=>0,
                'message'=>"Wrong CAPTCHA Provided!",
            ));
        }else{
            $otp = rand(100000, 999999);
            $date = date("Y-m-d");
            $time = date('Y-m-d', strtotime($date .' +1 day'));
            $query = mysqli_query($conn, "INSERT INTO _users (_fName, _lName, _country, _uPhone, _uEmail, _userName, _uPassword, _otp, _otpExpiry, _referredMe) 
            VALUES ('$fName', '$lName', '$Country', '$mobile', '$uEmail', '$userName', '$uPassword', '$otp', '$time', '$refer') ");
            if($query){
                 $message = "
                <html>
                    <head>
                        <style>
                            .btn{
                                padding: 12px;
                                background-color: gold;
                                color: black;
                                border-radius: 8px;
                                border: 1px solid blue;
                                text-decoration: none;
                            }
                        </style>
                    </head>
                    <body style='background-color:#000033; color:white; padding: 10px; height: auto; padding: 20px'>
                        <h5> Hi ".$userName.", </h5>
                        <p>Welcome to Pryme Capitals one of the largest digital financial firm and real estate investment. We wish you a great experience. </p>

                        <p>
                            Your login information: <br>
                            Login: ".$userName."<br>
                            Password: ".$uPassword."
                        </p>

                        <p>
                            You can login here: https://www.prymecapitals.com/login <br>

                            Contact us immediately if you did not authorize this registration. <br>

                            Thank you for choosing <a href='https://prymecapitals.com'>Pryme Capitals</a>.

                        </p>  
                        <div style='background-color:white; height:4px; width:100%; margin-top:20px; margin-bottom:20px'></div>
                        <p>
                            For questions drop us mail at admin@prymecapitals.com.<br>
                            <h6>&copy ".date('Y')." Pryme Capitals. All Rights Reserved.</h6>

                        </p> 

                    </body>
                </html>
                ";
                send_mail($uEmail, $message, $subject); 
                print json_encode(array(
                    'status'=>1
                ));
            }else{
                print json_encode(array(
                    'status'=>0,
                    'message'=>"Database Timeout, Try again Shortly!",
                ));
            }
        }
        
    }
?>