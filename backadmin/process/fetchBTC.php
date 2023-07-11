<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "select * from ".BTC." where B_Id = $id and B_Status = 'A'");
		$data = mysqli_fetch_assoc($query);
		
		print json_encode(array(
			"status" => 1,
			"address" => $data['B_Address'],
			"id" => $data['B_Id'],
			
		));
		
	}else{
		header("location: ../");
	}

?>