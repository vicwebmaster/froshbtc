<?php

// Database connection credentials
if(strtolower($_SERVER['SERVER_NAME'])=='localhost'){
    $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
    $database = 'btcfrosh'; // specify database name
    $db_user = 'root'; // specify username
    $db_pass = ''; // specify password
}else{
    $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
    $database = 'prymecap_frosh'; // specify database name
    $db_user = 'prymecap_frosh'; // specify username
    $db_pass = 'prymecap_frosh'; // specify password
}


$conn = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");

// // Database connection credentials
// $hostname = 'localhost'; // specify host domain or IP, i.e. 'localhost' or '127.0.0.1' or server IP 'xxx.xxxx.xxx.xxx'
// $database = 'megavex-trade'; // specify database name
// $db_user = 'root'; // specify username
// $db_pass = ''; // specify password


// $conn = mysqli_connect("$hostname" , "$db_user" , "$db_pass", "$database");
