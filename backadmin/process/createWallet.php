<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['_wallet'])){
		$wallet = mysqli_real_escape_string($conn, $_POST['_wallet']);
		
		if(empty($wallet)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(createWallet($wallet) == 1){
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