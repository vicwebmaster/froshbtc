<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		if(changeStatus($id, "D", P, "_status", "id")==1){
			print json_encode(array(
				"status" => 1,
			));
		}else{
			print json_encode(array(
				"status" => 0,
			));
		}
		
	}else{
		header("location: ../404");
	}

?>