<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "select * from ".WALLET." where W_Id = $id and W_Status = 'A'");
		$data = mysqli_fetch_assoc($query);
		
		print json_encode(array(
			"status" => 1,
			"wallet" => $data['W_Name'],
			"id" => $data['W_Id'],
			
		));
		
	}else{
		header("location: ../");
	}

?>