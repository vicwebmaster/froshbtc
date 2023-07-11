<?php
require_once "../include/config.php";
require_once "../include/session.php";

	if(isset($_POST['id'])){
		
		$id = mysqli_real_escape_string($conn, $_POST['id']);
		$query = mysqli_query($conn, "SELECT * FROM _plantrx join _plan on id = _planId where _pId = '$id' and _stts='A'");
		if(mysqli_num_rows($query)>0){
			$fetch = mysqli_fetch_array($query);
			$userid = $fetch['_user'];
			$percent = $fetch['_return'];
			$amt = $fetch['_amt'];
            $days = $fetch['_day'];
			$gain = calcPercentage($amt, $percent);
			$realgain = ($gain*$days) + $amt;
			$query2=mysqli_query($conn, "UPDATE _users SET _totalBal=(_totalBal+$realgain), _interestBal=(_interestBal+$gain) WHERE _uId='$userid'");
			$query3=mysqli_query($conn, "UPDATE _plantrx SET _stts='C' WHERE _pId='$id'");
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