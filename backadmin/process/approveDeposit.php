<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "SELECT * FROM _history where hId = '$id' and hStatus='Pending'");
		if(mysqli_num_rows($query)>0){
			$fetch = mysqli_fetch_array($query);
			$userid = $fetch['hUser'];
			$amt = $fetch['hAmt'];
			$query2=mysqli_query($conn, "UPDATE _users SET _totalBal=(_totalBal+$amt), _depositBal=(_depositBal+$amt) WHERE _uId='$userid'");
			$query3=mysqli_query($conn, "UPDATE _history SET hStatus='Approved' WHERE hId='$id'");
			if($query3){
				print json_encode(array(
					"status" => 1,
				));
			}else{
				print json_encode(array(
					"status" => 0,
				));
			}
		}else{
			print json_encode(array(
				"status" => 1,
			));
		}
		
		
		
	}else{
		header("location: ../404");
	}

?>