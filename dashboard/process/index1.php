<?php
function send_mail($email, $messag, $subject) {
        require_once('mailer/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "";
        $mail->Host = "psecuresystem.net";
        $mail->Port = 587;
        $mail->AddAddress($email);
        $mail->Username = "support@psecuresystem.net";
        $mail->Password = "MMW4f5UcRG";
        $mail->SetFrom('support@psecuresystem.net', 'Name Here');
        $mail->AddReplyTo("support@psecuresystem.net", "Private Secure System");
        $mail->Subject = $subject;
        $mail->MsgHTML($messag);
        $mail->Send();
    }
	$email = "welcome2ddcity@yahoo.com";
	$subject = "New Mail";
	$messag = "Hello, Testing PHP Mailer";
	if(send_mail($email, $messag, $subject)){
		echo "Message sent";
	}else{
		echo "Unable to Send Message";
	}