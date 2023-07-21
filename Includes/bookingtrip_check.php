<?php include ("../LoginSignupModel/config.php"); ?>

<?php
    session_start();
    foreach($_POST as $name => $content) { 
        
     }

     $sql = "update `destinations` set `Booked` = 'yes' where `destinations`.`id` = 1";
     $result = mysqli_query($conn, $sql);
     if(!$result){
        echo (" Error : ".mysqli_error($conn));
        exit;
    }
    else{
        echo ("Successful! You can Login now");
        header("location: ../LoginSignupModel/dashboard.php");
        exit;
    }
    $conn->close();
?>