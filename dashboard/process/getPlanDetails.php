<?php
include "session.php";
include "conn.php";
include "function.php";
include "config.php";
if(isset($_POST['id'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = mysqli_query($conn, "SELECT * FROM _plan WHERE id = '$id'") or die(mysqli_error($conn));
    if(mysqli_num_rows($query)>0){
        $result = mysqli_fetch_array($query);
        print json_encode(array(
			'status'=>1,
			'name'=>$result['_planName'],
			'return'=>$result['_return'],
			'day'=>$result['_day'],
			'min'=>$result['_minAmt'],
			'max'=>$result['_maxAmt'],
		));
	}else{
		print json_encode(array(
			'status'=>0,
			'message'=>"Invalid Plan ID!",
		));
	}
}
