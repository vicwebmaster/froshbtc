<?php
include "session.php";
include "conn.php";
include "function.php";
include "config.php";

if ( $_POST['hash'] == "") {
    
	print json_encode(array(
		'status' => 0,
		'message' => 'Transaction hash/ID is empty',
	));
		
}else {
    $hash=$_POST['hash'];
    $trx = rand(000000000, 999999999);
    $amt = $_SESSION['amt'];
    $query = mysqli_query($conn, "INSERT INTO _history (hUser, hTrx, hAmt, hGateway, hLink) VALUES ('$userid', '$trx', '$amt', 'BNB', '$hash')");
    if ( $query ) {
        $message='
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Deposit Pending Review</title>
        </head>
        <body>
            <div style="background-color: #f2f2f2; padding: 20px;">
                <div style="background-color: #ffffff; padding: 20px; border-radius: 5px; text-align: center;">
                    <h1 style="color: #333;">Deposit Pending Review</h1>
                    <p style="font-size: 16px; color: #555;">Hello '.$clientdata['_fName'].',</p>
                    <p style="font-size: 16px; color: #555;">We have received your deposit request, and it is currently pending for review.</p>
                    <p style="font-size: 16px; color: #555;">Once your deposit is verified, the credited amount will be added to your account.</p>
                    <p style="font-size: 16px; color: #555;">Here are the details of your deposit:</p>
                    <ul style="list-style: none; padding: 0;">
                        <li style="font-size: 16px; color: #555;">Amount: $'.$amt.'</li>
                        <li style="font-size: 16px; color: #555;">Transaction ID: '.$trx.'</li>
                    </ul>
                    <p style="font-size: 16px; color: #555;">Thank you for choosing our services. We will notify you once the review is complete.</p>
                </div>
            </div>
        </body>
        </html>
        ';
        send_mail($clientdata['_uEmail'], "Deposit Pending Review", $message);
        print json_encode( array(
            "status" => 1,
        ) );

    } else {
        print json_encode( array(
            "status" => 0,
            "title" => "Error!",
            "message" => "Please Try later!",
        ) );
    }
    
}
unset($_SESSION['amt']);