<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['_name'])){
		$pname = mysqli_real_escape_string($conn, $_POST['_name']);
		$pdays = mysqli_real_escape_string($conn, $_POST['days']);
		$pmin = mysqli_real_escape_string($conn, $_POST['min']);
		$pmax = mysqli_real_escape_string($conn, $_POST['max']);
		$ppercentage = mysqli_real_escape_string($conn, $_POST['percentage']);
		
		if(empty($pname) or empty($pdays) or empty($pmin) or empty($pmax) or empty($ppercentage)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(createPlan($pname, $pdays, $pmin, $pmax, $ppercentage) == 1){
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