<?php
                $to = "test@localhost";
                $subject = "Please Verify your email Address";
                $_userName = "Mr Money";
                $otp = 678798;
                
                $_uEmail = "ggg@ss.vvv";
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
                    <img src='../../assets/images/logoIcon/logo.png'>
                    <h5> Hi, ".$_userName.", </h5>
                    <p>Thanks for joining us! <br> Please click on the button below to verify your email address</p>
                    
                    <a href='http://localhost/megavex-trade/verify?otp=".$otp."&&email=".$_uEmail."' class='btn'>Verify Here!</a>
                
                </body>
                <footer style= 'margin-top: solid; margin-color:white; text-align:center;'>
                        <h6>&copy ".date('Y')." Megave-Trade. All Rights Reserved.</h6>
                </footer>
                </html>
                ";

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // More headers
                $headers .= 'From: <webmaster@example.com>' . "\r\n";

                mail($to,$subject,$message,$headers);