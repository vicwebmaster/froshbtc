<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


    function checkUsername($username){
        global $conn;
        $query = mysqli_query($conn, "SELECT * FROM _users WHERE _userName = '$username'");
        if(mysqli_num_rows($query)>0){
            return 1;
        }else{
            return 0;
        }
    }

    function fetchEmailViaUsername($username){
        global $conn;
        $query = mysqli_query($conn, "SELECT * FROM _users WHERE _userName = '$username'");
        return mysqli_fetch_assoc($query);
    }


    function send_mail($to, $subject, $message) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->SMTPDebug = 0; // Set to 2 for debugging
            $mail->isSMTP();
            $mail->Host = 'prymecapitals.com'; // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@prymecapitals.com'; // Your SMTP username
            $mail->Password = 'Bigvon@2024'; // Your SMTP password
            // $mail->Password = 'rubymailpass';
            $mail->SMTPSecure = 'tls'; // Enable TLS encryption
            $mail->Port = 587; // TCP port to connect to

            // Recipients
            $mail->setFrom('contact@prymecapitals.com', 'Pryme Capitals'); // Sender email and name
            $mail->addAddress($to, NULL); // Recipient email and name

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message; // You can use HTML for the email content

            // Send the email
            $mail->send();
            return true; // Email sent successfully
        } catch (Exception $e) {
            // print_r($e); die();
            return false;
        }
    }