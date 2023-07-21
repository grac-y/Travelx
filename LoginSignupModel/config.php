<?php
    $dbhost = "localhost:3306";
    $dbuser = "root";
    $dbpassword = "";
    $db = "Travel";

    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword ,$db);
    if(!$conn){
        echo ("Connection Failed!".mysqli_connect_error());
        exit;
    }
?>