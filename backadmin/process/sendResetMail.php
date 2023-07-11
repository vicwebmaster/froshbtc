<?php
require_once "../include/config.php";
session_start();
	if(isset($_POST['email'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		if(checkEmail($email) == 1){
			$query = mysqli_query($conn, "select C_Name as name from ".CLIENTS." where C_Email = '$email'");
			if(mysqli_num_rows($query)>0){
				$data = mysqli_fetch_assoc($query);
                $name = $data['name'];
                $otp = rand(100000, 1000000000);
		        $update_otp = mysqli_query($conn, "update ".CLIENTS." set C_PasswordOTP = '$otp' where C_Email = '$email'");
                if(mysqli_affected_rows($conn) > 0){
                    $to = "$email";
                    $subject = "Reset_Password :: Lucky Number";
                    $message = ("../../reset_mail.html");
                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "Content-Type: text/html; charset=UTF-8\r\n";
                    $header .= 'From: <ln@emmyzealoussoftwares.com>' . "\r\n";

                    function buildMessage($source, $varaiable){
                        $message_url = file_get_contents($source);
                        $data = strtr($message_url, $varaiable);
                        return $data;
                        //$varaiable = array();
                    }

                    $varaiable = array(
                            "CName" => "$name",
                            "Link" => "https://ln.emmyzealoussoftwares.com/newPass?otp=$otp&email=$email",
                    );


                    $x = buildMessage($message, $varaiable);

                    if(mail($to, $subject, $x, $header)){
                        header("location: ../../mailSent");
                    }else{
                        $_SESSION['msg']="<div class='alert alert-danger'>Mail not Sent!</div>";
                        redirectTo("../../reset_password");
                    }
                }else{
                    $_SESSION['msg']="<div class='alert alert-danger'>Network error, Please try again later!</div>";
                    redirectTo("../../reset_password");
                }
            }else{
				$_SESSION['msg']="<div class='alert alert-danger'>Network error, Please try again later!</div>";
                redirectTo("../../reset_password");
			}
		}else{
			$_SESSION['msg']="<div class='alert alert-danger'>Email is not Valid!</div>";
            redirectTo("../../reset_password");
		}
	}else{
        redirectTo("../../index");
	}
?>