<?php
require_once "../include/config.php";
	if(isset($_POST['uname'])){
		$uname = mysqli_real_escape_string($conn, $_POST['uname']);
		$query = mysqli_query($conn, "select * from ".CLIENTS." where C_UName = '$uname'");
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
		redirectTo("../index");
	}
?>