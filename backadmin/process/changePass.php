<?php
include "../include/config.php";
	include "../include/session.php";

$rpass = $admin['A_Password'];

if(isset($_POST['pass'])){
	$pass = htmlspecialchars($_POST['pass']);
	$newpass = htmlspecialchars($_POST['newpass']);
	$cnewpass = htmlspecialchars($_POST['cnewpass']);
	$hpass = password_hash($cnewpass, PASSWORD_DEFAULT);
	if(empty($pass) or empty($newpass) or empty($cnewpass)){
		print json_encode(array(
			'status' => 0,
			'title' => 'Error!',
			'message' => 'Please Make Sure all Field are Filled!',
		));
	
	}else if($newpass != $cnewpass){
		print json_encode(array(
			'status' => 0,
			'title' => 'Error!',
			'message' => 'New Passwords Mismatch!',
		));
	}else if(checkPassword($pass, $rpass)==0){
		print json_encode(array(
			'status' => 0,
			'title' => 'Error!',
			'message' => 'Current Password does not Match your Old Password!',
		));
	}else if(updatePassword($admin['A_Id'], $hpass)==1){
		print json_encode(array(
			'status' => 1,
			'title' => 'Success!',
			'message' => 'Password Changed!',
		));
	}else{
		print json_encode(array(
			'status' => 0,
			'title' => 'Error!',
			'message' => 'Please try again Later!',
		));
	}
}else{
	header("location: ../");
}
?>
