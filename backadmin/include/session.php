<?php
include "conn.php";
session_start();
if(isset($_SESSION['s_id'])){
    $mysn = $_SESSION['s_id'];
    $sql = mysqli_query($conn, "select * from ".A." where A_Id = '$mysn'") or die(mysqli_error($conn));
    if(mysqli_num_rows($sql) !=1){
        header ("location: index");
    }
    else{
        $admin = mysqli_fetch_assoc($sql);
    }
}
else{
    header ("location: index");
} 
?>