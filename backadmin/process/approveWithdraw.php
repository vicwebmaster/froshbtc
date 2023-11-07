<?php
require_once "../include/config.php";
require_once "../include/session.php";

if(isset($_POST['id'])){
	$id = mysqli_real_escape_string($conn, $_POST['id']);
	$x=fetchWithdrawalOne($id);
	if(changeStatus($id, "Approved", T, "wStatus", "wId")==1){
		$message='
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Withdrawal Approved</title>
        </head>
        <body>
            <div style="background-color: #f2f2f2; padding: 20px;">
                <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
                    <h1 style="color: #333;">Withdrawal Approved</h1>
                    <p style="font-size: 16px; color: #555;">Hello '.$x['_fName'].',</p>
                    <p style="font-size: 16px; color: #555;">We have approved your withdrawal request</p>
                    <p style="font-size: 16px; color: #555;">Here are the details of your withdrawal:</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="font-size: 16px; color: #555;">Amount: $'.$x['wAmt'].'</li>
                        <li style="font-size: 16px; color: #555;">Transaction ID: '.rand(00000000000, 99999999999).'</li>
                    </ul>
                    <p style="font-size: 16px; color: #555;">Withdrawal process is complete, and the funds have been transferred.</p>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing our services.</p>
                </div>
            </div>
        </body>
        </html>
        ';
        sendMail($x['_uEmail'], "Withdrawal Approved", $message);
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