<?php
require_once "../include/config.php";
	if(isset($_POST['email'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		if(checkEmail($email) == 1){
			$query = mysqli_query($conn, "select * from ".CLIENTS." where C_Email = '$email'");
			if(mysqli_num_rows($query)>0){
				print json_encode(array(
					"status" => 0,
				));
			}else{
				print json_encode(array(
					"status" => 1,
				));
			}
		}else{
			print json_encode(array(
					"status" => 2,
				));
		}
	}else{
		redirectTo("../index");
	}
?>