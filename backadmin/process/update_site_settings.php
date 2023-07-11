<?php
	include "../include/config.php";
	include "../include/session.php";
	if(isset($_POST['name'])){
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$min = mysqli_real_escape_string($conn, $_POST['min']);
		$referral = mysqli_real_escape_string($conn, $_POST['referral']);
		$wFee = mysqli_real_escape_string($conn, $_POST['wFee']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone']);
		
		if(empty($name) or empty($address) or empty($email) or empty($min) or empty($phone)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(updateSetting($name, $address, $email, $min, $referral, $wFee, $phone) == 1){
				print json_encode(array(
				"status" => 1,
				));
			}else{
				print json_encode(array(
				"status" => 0,
				"message" => "Please try again!",
				));
			}
		}
	}else{
		redirectTo("../dashboard");
	}
?>