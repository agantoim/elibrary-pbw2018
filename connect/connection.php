<?php
    //create connection
    //urutan parameter: mysqli(server,username,password,database)
    $conn=new mysqli("localhost","root","","elibrarydb");

    //check connection
    if($conn->connect_errno){
        echo "Failed to connect.";
    }
?>

