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
    $query = mysqli_query($conn, "INSERT INTO _history (hUser, hTrx, hAmt, hGateway, hLink) VALUES ('$userid', '$trx', '$amt', 'TRON', '$hash')");
    if ( $query ) {
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