<?php
    session_start();
    include "conn.php";
    if(isset($_SESSION['realid'])){
        $userid = $_SESSION['realid'];
        $query = mysqli_query($conn,  "SELECT * FROM _users WHERE _uId = $userid") or die(mysqli_error($conn));
        if(mysqli_num_rows($query) > 0){
            $clientdata = mysqli_fetch_array($query);
            $autoQuery=mysqli_query($conn, "select * from _plantrx join _plan on id = _planId  where _stts='A'");
            if(mysqli_num_rows($autoQuery)>0){
               while($autoRow=mysqli_fetch_array($autoQuery)){
                    if(date('Y-m-d H:i:s')>=date('Y-m-d H:i:s', strtotime($autoRow['_date'] .' + '.$autoRow['_day'].' day'))){
                        $autoUserid = $autoRow['_user'];
                        $autoid = $autoRow['_pId'];
            			$autoPercent = $autoRow['_return'];
            			$autoAmt = $autoRow['_amt'];
            			$autoGain = ($autoPercent / 100) * $autoAmt;
            			$autoRealgain = ($autoGain*$autoRow['_day']) + $autoAmt;
            			$autoquery2=mysqli_query($conn, "UPDATE _users SET _totalBal=(_totalBal+$autoRealgain), _interestBal=(_interestBal+$autoGain) WHERE _uId='$autoUserid'");
            			$autoquery3=mysqli_query($conn, "UPDATE _plantrx SET _stts='C' WHERE _pId='$autoid'");
                    }
        			
                } 
            }
        }else{
            header("location:../login");
        }
    }else{
        header("location:../login");
    }
?>