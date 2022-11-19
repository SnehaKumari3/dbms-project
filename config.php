<?php
    //declare server -> Localhost
    $host = "127.0.0.1";
    //declare user
    $user = "root";      
    //password
    $pass ="";   
    //name of database                               
    $db = "movietheatredb";
    $port = 3306;
    //create connection
    $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());
    //checking connection established or not 
    if(mysqli_connect_errno()){
        echo "Failed to connect";
        exit();
    }

    // else{
    //     echo "Connection Successfully";
    // }
?>