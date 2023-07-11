<?php
include "../include/config.php";
session_start();


if(isset($_POST['uname'])){
    if(empty($_POST['uname'])){
        print json_encode(array(
		"status" => 0,
		"title" => "Empty Username!",
		"message" => "Please enter your email and try again!",
		));
    }
    elseif(empty($_POST['pass'])){
        print json_encode(array(
		"status" => 0,
		"title" => "Empty Password!",
		"message" => "Please enter your password and try again!",
		));
    }
    else{
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);
        
        $sql = ("select * from ".A." where A_Username = '$uname'");
        $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
        
        if(mysqli_num_rows($result) <1){
         
            print json_encode(array(
			"status" => 0,
			"title" => "Incorrect Details!",
			"message" => "Please confirm your Username and password!",
			));
        }
        else{
            $data = mysqli_fetch_assoc($result);
			$hpass = $data['A_Password'];
			
			if(password_verify($pass, $hpass)){
				$_SESSION['s_id'] = $data['A_Id'];
				print json_encode(array(
				"status" => 1,
				));
			}else{
				print json_encode(array(
				"status" => 0,
				"title" => "Incorrect Details!",
				"message" => "Please confirm your Username and password!",
				));
			}
			
			
        
        }
    } 
}
else{
    header ("location: index");
}

?>

