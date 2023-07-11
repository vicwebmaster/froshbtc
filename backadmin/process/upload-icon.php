<?php
	include "../include/config.php";
	include "../include/session.php";
		$target = "../assets/images/icon/".basename($_FILES['image']['name']);
		$link = "assets/images/icon/".basename($_FILES['image']['name']);
		$ext = pathinfo($target, PATHINFO_EXTENSION);
		if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
			print json_encode(array(
				"status" => 0,
				"title" => "Icon Not Uploaded",
				"message" => "Only JPG and PNG files are allowed!",
			));
		}else if($_FILES['image']['size']>1048576){
			print json_encode(array(
				"status" => 0,
				"title" => "Icon Not Uploaded",
				"message" => "File size too big, It should be less than 1MB!",
			));
		}else if(file_exists($target)){
			print json_encode(array(
				"status" => 0,
				"title" => "Icon Not Uploaded",
				"message" => "File is already Uploaded!",
			));
		}else if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			if(updateIcon($link) == 1){
				print json_encode(array(
				"status" => 1,
				"title" => "Success",
				"message" => "Icon Successfully Updated!",
			));
			}else{
				print json_encode(array(
					"status" => 0,
					"title" => "Failed to upload!",
					"message" => "Please Try uploading it later!",
				));
			}
		}else{
			print json_encode(array(
				"status" => 0,
				"title" => "Failed to upload!",
				"message" => "Please Try uploading it later!",
			));
		}
?>