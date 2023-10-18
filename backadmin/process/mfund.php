<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['single'])){
		$single = mysqli_real_escape_string($conn, $_POST['single']);
		$amt = mysqli_real_escape_string($conn, $_POST['amt']);
		
		if(is_numeric($single)){
			if(is_numeric($amt)){
				if(empty($amt)){
					print json_encode(array(
						"status" => 0,
						"title" => "Empty Amount!",
						"message" => "Please enter Amount!",
					));
				}else if(mfundUser($single, $amt) == 1){
						print json_encode(array(
							"status" => 1,
							"title" => "Success!",
							"message" => "Funds Debitted!",
						));
					}else{
						print json_encode(array(
							"status" => 0,
							"title" => "Error!",
							"message" => "Try again later!",
						));
					}
			}else{
				print json_encode(array(
					"status" => 0,
					"title" => "Invalid Amount!",
					"message" => "Amount Should be Numeric!",
				));
			}
		}else{
			print json_encode(array(
				"status" => 0,
				"title" => "Invalid ID!",
				"message" => "Try again later!",
			));
		}
	}else{
		redirectTo("../index");
	}
?>