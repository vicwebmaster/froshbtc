<?php
session_start();
include "conn.php";
include "function.php";
include "config.php";
if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $query = mysqli_query($conn, "SELECT * FROM _users WHERE _userName = '$username' && _uPassword = '$password'") or die(mysqli_error($conn));
    if(mysqli_num_rows($query)>0){
        $result = mysqli_fetch_array($query);
        
		if($result['_uStatus']=="New"){
			$_SESSION['verifyEmail']=$result['_uEmail'];
			print json_encode(array(
				'status'=>2,
				'message'=>"Your account has not been Verified, Click OK to Verify Now!",
			));
		}else if($result['_uStatus']=="Suspended"){
			print json_encode(array(
				'status'=>0,
				'message'=>"Your account has been Suspended!",
			));
		}else{
			$_SESSION['realid']=$result['_uId'];
			print json_encode(array(
				'status'=>1
			));
		}
		
	}else{
		print json_encode(array(
			'status'=>0,
			'message'=>"Invalid Login Details!",
		));
	}
}
