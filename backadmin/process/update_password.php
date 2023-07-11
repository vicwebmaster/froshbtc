<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['oldpass'])){
		$oldpass = mysqli_real_escape_string($conn, $_POST['oldpass']);
		$newpass = mysqli_real_escape_string($conn, $_POST['newpass']);
		$cnewpass = mysqli_real_escape_string($conn, $_POST['cnewpass']);
		$id = mysqli_real_escape_string($conn, $profile['C_Id']);
		$name = mysqli_real_escape_string($conn, $profile['C_Name']);
		$mainpass = mysqli_real_escape_string($conn, $profile['C_Password']);
		
	   if(empty($oldpass) or empty($newpass) or empty($cnewpass)){
		   print json_encode(array(
				"status" => 0,
				"title" => "Empty Field!",
				"message" => "Please Fill all Field!",
		   ));
		}else{ 
		   if($newpass != $cnewpass){
				print json_encode(array(
					"status" => 0,
					"title" => "Mismatch!",
					"message" => "New Passwords did not match!",
			   ));
			}else{
			  if(password_verify($oldpass, $mainpass)){
				  $hpass = password_hash($cnewpass, PASSWORD_DEFAULT);
				   $sql = "UPDATE ".CLIENTS." SET C_Password='$hpass' WHERE C_Id='$id'";
								   
							if ($conn->query($sql) === TRUE) {
								insertNotification($id, "You changed your Password");
								print json_encode(array(
									"status" => 1,
									"title" => "Success!",
									"message" => "Password Changed!",
							   ));
							} else {
								print json_encode(array(
									"status" => 0,
									"title" => "Error!",
									"message" => "Error Updating Password!",
							   ));
							}
			  
		  }else{
			  print json_encode(array(
				"status" => 0,
				"title" => "Mismatch!",
				"message" => "Your Old Password does not match the Existing Password!",
			));
		  }
	   }
	   }
	}else{
		redirectTo("../edit_Profile");
	}
?>