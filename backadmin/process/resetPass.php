<?php
require_once "../include/config.php";
session_start();
	if(isset($_POST['npass'])){
		$npass = mysqli_real_escape_string($conn, $_POST['npass']);
		$cpass = mysqli_real_escape_string($conn, $_POST['cpass']);
		if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            if(empty($npass) or empty($cpass)){
                print json_encode(array(
                    "status" => 0,
                    "title" => "Empty Field!",
                    "message" => "Please Fill all Field!",
               ));
            }else{
                if($npass == $cpass){
                    $hpass = password_hash($cpass, PASSWORD_DEFAULT);
                    $chgpass = mysqli_query($conn, "update ".CLIENTS." set C_Password = '$hpass', C_PasswordOTP = '0' where C_Email = '$email'");
                if(mysqli_affected_rows($conn)>0){
                    print json_encode(array(
                        "status" => 1,
                        "title" => "Password Changed!",
                        "message" => "You can now Login with your new Password",
                   ));
                }else{
                    print json_encode(array(
                        "status" => 0,
                        "title" => "Error!",
                        "message" => "An error occured, please try again later!",
                   ));
                }
                }else{
                    print json_encode(array(
                        "status" => 0,
                        "title" => "Password MisMatch!",
                        "message" => "Both Passwords did not Match!",
                   ));
                }
            }
        }else{
            redirectTo("../../index");
        }
	}else{
		redirectTo("../../index");
	}
?>