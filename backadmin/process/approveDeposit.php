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
			
			if(fetchUserSingle($userid)['_firstDeposit']=="Y" && fetchUserSingle($userid)['_referredMe']!=""){
				$firstGen = fetchUserSingleByUname(fetchUserSingle($userid)['_referredMe']);
				$firstGenPrice = calcPercentage($amt, 12);
				$firstGenid = $firstGen['_uId'];
				fundUser($firstGen['_uId'], $firstGenPrice, "_totalBal");
				fundUser($firstGen['_uId'], $firstGenPrice, "_referralEarn");
				$query1=mysqli_query($conn, "INSERT INTO referral (_user, _from, _level, _percent, _amount) VALUES ('$firstGenid', '$userid', 'First Generation', '12', '$firstGenPrice')")or die(mysqli_error($conn));
				if(mysqli_affected_rows($conn)>0){
					
					mysqli_query($conn, "UPDATE _users SET _firstDeposit='N' WHERE _uId='$userid'");
				}else{ echo "failed1"; }
				
			}
			
			$subject = "Your Deposit was Approved";
 $message = "
    <html>
        <body style='background-color:#000033; color:white; padding: 10px; height: auto; padding: 20px'>
            <h5> Hi ".fetchUserSingle($userid)['_fName'].", </h5>
            <p>Your deposit of $".$amt." has been Approved <br>
            Please use the link below to login to your dashboard to view your new Account Balance<br>
            Link: https://www.prymecapitals.com/login
            </p>

            

            <p>

                You are receiving this mail because you registered to Pryme Capitals. <br>

                Thank you for choosing <a href='https://prymecapitals.com'>Pryme Capitals</a>.

            </p>  
            <div style='background-color:white; height:4px; width:100%; margin-top:20px; margin-bottom:20px'></div>
            <p>
                For questions drop us mail at admin@prymecapitals.com.<br>
                <h6>&copy ".date('Y')." Pryme Capitals. All Rights Reserved.</h6>

            </p> 

        </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <admin@prymecapitals.com>' . "\r\n";

     sendMail(fetchUserSingle($userid)['_uEmail'],$subject,$message);
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