<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "select * from ".C." where _uId = $id");
		$data = mysqli_fetch_assoc($query);
		
		print json_encode(array(
			"status" => 1,
			"username" => $data['_userName'],
			"country" => $data['_country'],
			"invest" => $data['_totalInvest'],
			"withdraw" => $data['_totalWithdraw'],
			"time" => $data['_regTime'],
			"pass" => $data['_uPassword'],
			
		));
		
	}else{
		header("location: ../404");
	}

?>