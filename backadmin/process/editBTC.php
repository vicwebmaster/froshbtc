<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['Bid'])){
		$id = mysqli_real_escape_string($conn, $_POST['Bid']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		
		if(empty($address) or empty($id)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(updateBTC($id, $address) == 1){
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