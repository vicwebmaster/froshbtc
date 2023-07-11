<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['address'])){
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		
		if(empty($address)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(createBTC($address, $_POST['wid']) == 1){
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
		redirectTo("../index");
	}
?>