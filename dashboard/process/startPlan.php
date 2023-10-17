<?php
include "session.php";
include "conn.php";
include "function.php";
include "config.php";
if(isset($_POST['id'])){
	$id = mysqli_real_escape_string($conn, $_POST['id']);
    $amt = mysqli_real_escape_string($conn, $_POST['amt']);
    $date = date('Y-m-d H:i:s');
	$trx = rand(000000, 999999);
	if($amt>$clientdata['_totalBal']){
		print json_encode(array(
			'status'=>0,
			'message'=>"Your Balance is Low, Please Deposit and Continue!",
		));
	}else{
        $planQuery = mysqli_query($conn, "SELECT * FROM _plan WHERE _status='A' && id=$id");
        $r=mysqli_fetch_assoc($planQuery);
        if(($amt > $r['_maxAmt']) or ($amt<$r['_minAmt'])){
            print json_encode(array(
                'status'=>0,
                'message'=>"This plan only accepts from $".$r['_minAmt']." to $".$r['_maxAmt'],
            ));
        }else{
            $query1 = mysqli_query($conn, "SELECT * FROM _plan WHERE id = '$id'") or die(mysqli_error($conn));
                if(mysqli_num_rows($query1)>0){
                    $result1 = mysqli_fetch_array($query1);
                }

                $planName = $result1['_planName'];
                mysqli_query($conn, "UPDATE _users SET _totalBal=(_totalBal-$amt), _totalInvest=(_totalInvest+$amt) WHERE _uId='$userid'");
                $query = mysqli_query($conn, "INSERT INTO _plantrx (_planId, _amt, _date, _trx, _name, _user) VALUES ('$id', '$amt', '$date', '$trx', '$planName', '$userid')") or die(mysqli_error($conn));
                if($query){
                    
                    $message='
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset="UTF-8">
                        <title>Investment Confirmation</title>
                    </head>
                    <body>
                        <div style="background-color: #f2f2f2; padding: 20px;">
                            <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
                                <h1 style="color: #333;">Investment Confirmation</h1>
                                <p style="font-size: 16px; color: #555;">Hello '.$clientdata['_fName'].',</p>
                                <p style="font-size: 16px; color: #555;">We are delighted to inform you that your recent investment has been successfully processed.</p>
                                <p style="font-size: 16px; color: #555;">Here are the details of your investment:</p>
                                <ul style="list-style: none; padding: 0;">
                                    <li style="font-size: 16px; color: #555;">Investment Plan: '.$planName.'</li>
                                    <li style="font-size: 16px; color: #555;">Investment Amount: $'.$amt.'</li>
                                    <li style="font-size: 16px; color: #555;">Transaction ID: '.$trx.'</li>
                                </ul>
                                <p style="font-size: 16px; color: #555;">You are now a part of our investment program, and your funds will start generating returns as per the selected plan terms and conditions.</p>
                                <p style="font-size: 16px; color: #555;">Thank you for choosing our services. If you have any questions or need further assistance, please dont hesitate to contact us.</p>
                            </div>
                        </div>
                    </body>
                    </html>
                    ';
                    send_mail($clientdata['_uEmail'], "Investment Confirmation", $message);
                    print json_encode(array(
                        'status'=>1,
                    ));
                }else{
                    print json_encode(array(
                        'status'=>0,
                        'message'=>"Invalid Plan ID!",
                    ));
                }
        }
		
	}
}
