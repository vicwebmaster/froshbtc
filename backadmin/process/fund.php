<?php
require_once "../include/config.php";
require_once "../include/session.php";
	if(isset($_POST['single'])){
		$single = mysqli_real_escape_string($conn, $_POST['single']);
		$amt = mysqli_real_escape_string($conn, $_POST['amt']);
		
		if(is_numeric($single)){
			if(is_numeric($amt)){
				if(empty($amt)){
					print json_encode(array(
						"status" => 0,
						"title" => "Empty Amount!",
						"message" => "Please enter Amount!",
					));
				}else if(fundUser($single, $amt, "_totalBal") == 1){
					fundUser($single, $amt, "_depositBal");
						print json_encode(array(
							"status" => 1,
							"title" => "Success!",
							"message" => "Account Successfully Funded!",
						));
						
						if(fetchUserSingle($single)['_firstDeposit']=="Y" && fetchUserSingle($single)['_referredMe']!=""){
							$firstGen = fetchUserSingleByUname(fetchUserSingle($single)['_referredMe']);
							$firstGenPrice = calcPercentage($amt, 12);
							$firstGenid = $firstGen['_uId'];
							fundUser($firstGen['_uId'], $firstGenPrice, "_totalBal");
							fundUser($firstGen['_uId'], $firstGenPrice, "_referralEarn");
							$query1=mysqli_query($conn, "INSERT INTO referral (_user, _from, _level, _percent, _amount) VALUES ('$firstGenid', '$single', 'First Generation', '12', '$firstGenPrice')")or die(mysqli_error($conn));
							if(mysqli_affected_rows($conn)>0){
								if(fetchUserSingle($firstGen['_uId'])['_referredMe']!=""){
									
									$secondGen = fetchUserSingleByUname(fetchUserSingle($firstGen['_uId'])['_referredMe']);
									if(fetchUserSingle($firstGen['_uId'])['_referredMe']!=fetchUserSingle($single)['_userName']){
										$secondGenPrice = calcPercentage($amt, 6);
										fundUser($secondGen['_uId'], $secondGenPrice, "_totalBal");
										fundUser($secondGen['_uId'], $secondGenPrice, "_referralEarn");
										$secondGenid = $secondGen['_uId'];
										mysqli_query($conn, "INSERT INTO referral (_user, _from, _level, _percent, _amount) VALUES ('$secondGenid', '$single', 'Second Generation', '6', '$secondGenPrice')");
										if(fetchUserSingle($secondGen['_uId'])['_referredMe']!=""){
											if(fetchUserSingle($secondGen['_uId'])['_referredMe']!=fetchUserSingle($single)['_userName']){
												$thirdGen = fetchUserSingleByUname(fetchUserSingle($secondGen['_uId'])['_referredMe']);
												$thirdGenPrice = calcPercentage($amt, 2);
												fundUser($thirdGen['_uId'], $thirdGenPrice, "_totalBal");
												fundUser($thirdGen['_uId'], $thirdGenPrice, "_referralEarn");
												$thirdGenid = $thirdGen['_uId'];
												mysqli_query($conn, "INSERT INTO referral (_user, _from, _level, _percent, _amount) VALUES ('$thirdGenid', '$single', 'Third Generation', '2', '$thirdGenPrice')");
											}
										}
									}
								}
							}else{ echo "failed1"; }
							mysqli_query($conn, "UPDATE _users SET _firstDeposit='N' WHERE _uId='$single'");
						}
					}else{
						print json_encode(array(
							"status" => 0,
							"title" => "Error!",
							"message" => "Try again later!",
						));
					}
			}else{
				print json_encode(array(
					"status" => 0,
					"title" => "Invalid Amount!",
					"message" => "Amount Should be Numeric!",
				));
			}
		}else{
			print json_encode(array(
				"status" => 0,
				"title" => "Invalid ID!",
				"message" => "Try again later!",
			));
		}
	}else{
		redirectTo("../index");
	}
?>