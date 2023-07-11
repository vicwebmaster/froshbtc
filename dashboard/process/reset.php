<?php
function send_mail($email, $messag, $subject) {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "server136.web-hosting.com";
        $mail->Port = 587;
        $mail->AddAddress($email);
        $mail->Username = "admin@megavex-trade.com";
        $mail->Password = "Grace2022";
        $mail->SetFrom('admin@megavex-trade.com', 'MegaVex Trade');
        $mail->AddReplyTo("admin@megavex-trade.com", "MegaVex Trade");
        $mail->Subject = $subject;
        $mail->MsgHTML($messag);
        if($mail->Send()){ return 1; }else{ return 0; }
    }
    include "conn.php";
    include "function.php";
    include "config.php";
    session_start();
    if(isset($_POST['email'])){
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if(empty($email) ){
            print json_encode(array(
                'status'=>0,
                'message'=>"Please Type in your Email",
            ));
        }
        // else if(!filter_var($uEmail, FILTER_VALIDATE_EMAIL)){
        //     print json_encode(array(
        //         'status'=>0,
        //         'message'=>"Invalid Email Address",
        //     ));
        // }
        else{
            $otp = rand(100000, 999999);
            $query = mysqli_query($conn, "UPDATE _users SET _uPassword='$otp' WHERE _uEmail='$email' ")or die(mysqli_error($conn));
            if($query){
                $to = $email;
                $subject = "Password Reset";
				$message = "
                <html>
                <head>
                    <style>
                        .btn{
                            padding: 12px;
                            background-color: red;
                            color: white;
                            border-radius: 8px;
                            border: 1px solid wiite;
                            text-decoration: none;
                        }
                    </style>
                </head>

                <body style='background-color:#000033; color:white; padding: 10px;'>
                    <h5> Hi, </h5>
                    <p>Your new Password is <b>".$otp.", You can change it from your Dashboard <br> Please click on the button below to Login with your new password</p>
                    
                    <a href='".$system['siteurl']."/login' class='btn'>Login Now!</a>
                
                </body>
                <footer style= 'margin-top: solid; margin-color:white; text-align:center;'>
                        <h6>&copy ".date('Y')." ".$system['sitename'].". All Rights Reserved.</h6>
                </footer>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <'.$system['siteemail'].'>' . "\r\n";

                if(send_mail($to, $message, $subject)==1){
                    print json_encode(array(
                        'status'=>1
                    ));
                }else{
                    print json_encode(array(
                        'status'=>0,
                        'message'=>"Mail Function Timeout, Try again Shortly!",
                    ));
                }
                
            }else{
                print json_encode(array(
                    'status'=>0,
                    'message'=>"Email does not exist on our Server!",
                ));
            }
        }
        
    }
?>