<?php
include "session.php";
include "conn.php";
include "function.php";
include "config.php";
$temp = explode( ".", $_FILES["image"]["name"] );
$newfilename = date( 'Ymdhisa' ) . '.' . end( $temp );
$target = "../prove/".$newfilename;

if ( $_FILES['image']['name'] == "") {
    
	print json_encode(array(
		'status' => 0,
		'message' => 'Please Upload Image',
	));
		
}else {
    $ext = pathinfo( $target, PATHINFO_EXTENSION );
    //Get mime type
    $mime_type = mime_content_type( $_FILES['image']['tmp_name'] );
    // If you want to allow certain files
    $allowed_file_types = ['image/png', 'image/jpeg', 'image/jpg'];
    if ( $ext != "jpg" && $ext != "jpeg" && $ext != "png" ) {
        print json_encode( array(
            "status" => 0,
            "title" => "Not Uploaded!",
            "message" => "Only JPG and PNG Images are allowed!",
        ) );
    }else if ( $_FILES['image']['size']>1048576 ) {
        print json_encode( array(
            "status" => 0,
            "title" => "Not Uploaded",
            "message" => "Image size too big, It should be less than 1MB!",
        ) );

    } else if ( ! in_array( $mime_type, $allowed_file_types )) {
        print json_encode( array(
            "status" => 0,
            "title" => "Not Uploaded!",
            "message" => "Only JPG and PNG Images are allowed!",
        ) );
    } else if ( move_uploaded_file( $_FILES['image']['tmp_name'], $target ) ) {
		$trx = rand(000000000, 999999999);
		$amt = $_SESSION['amt'];
		$query = mysqli_query($conn, "INSERT INTO _history (hUser, hTrx, hAmt, hGateway, hLink) VALUES ('$userid', '$trx', '$amt', 'BNB', '$newfilename')");
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
		
        
    } else {
        print json_encode( array(
            "status" => 0,
            "title" => "Error!",
            "message" => "Please Trylater!",
        ) );
    }
}
unset($_SESSION['amt']);