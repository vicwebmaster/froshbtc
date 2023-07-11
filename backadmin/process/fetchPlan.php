<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "select * from ".P." where id = $id and _status = 'A'");
		$data = mysqli_fetch_assoc($query);
		
		print json_encode(array(
			"status" => 1,
			"name" => $data['_planName'],
			"days" => $data['_day'],
			"min" => $data['_minAmt'],
			"max" => $data['_maxAmt'],
			"percentage" => $data['_return'],
			"id" => $data['id'],
			
		));
		
	}else{
		header("location: ../404");
	}

?>