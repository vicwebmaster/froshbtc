<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$reply = mysqli_real_escape_string($conn, $_POST['reply']);
		
		if(empty($reply) or empty($id)){
			print json_encode(array(
				"status" => 0,
				"message" => "Please make sure no field is empty!",
			));
		}else{
			if(replyTicket($id, $reply) == 1){
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