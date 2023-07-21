<?php
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $trip_name= $row['trip_name'];
    $price = $row['price'];
    $days = $row['duration'];
    $nights = $days - 1 ;
    $image = $row['Images'];
    $view = $row['View'];
?>