<?php
    function checkUsername($username){
        global $conn;
        $query = mysqli_query($conn, "SELECT * FROM _users WHERE _userName = '$username'");
        if(mysqli_num_rows($query)>0){
            return 1;
        }else{
            return 0;
        }
    }