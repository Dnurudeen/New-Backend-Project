<?php
    $dbserver = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'newdb';

    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);

    if ($conn == false){
        echo ("Database not connected");
    }
?>