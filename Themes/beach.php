<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beach Tours India</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Beach/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Beach/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Beach/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Beach/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Beach/kerala.jpg);
                background-size: 100% 100%;
            }
        }
    </style>
    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file  -->
    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/destination.css">
</head>

<body>
    <!-- header section starts  -->
    <?php include('../Includes/navbar.php'); ?>
    <!-- header ends  -->

    <!-- SignUp Modal  -->
    <?php include('../LoginSignupModel/signup.php'); ?>
    <!-- Signup model ends  -->

    <!-- login model begins -->
    <?php include('../LoginSignupModel/login.php'); ?>
    <!-- login model ends -->

    <!-- form for booking  -->
    <?php include('../Includes/plantrip.php') ?>
    <!-- form for booking ends  -->

    <!-- inner banner starts  -->
    <div class="inner_banner">
        <div class="breadcrumb">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li>/</li>
                <li class="active"><a>Beach Tours</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Beach</span> Tour Packages</h1>
                <p>ndia has a coastline that stretches 7516 km and has some of the most beautiful beaches ideal for a holiday of a lifetime with friends, family and partner. We offer you amazing sea, sand, and sun vacation with the best beach tour packages in India. With our tour packages, enjoy a vacation at the popular beaches in Goa, Andaman Islands, and Kerala as well as on some lesser-known yet gorgeous beaches of Karnataka, Maharashtra, Tamil Nadu, Pondicherry, Odisha, and West Bengal. The good times begin with us and our incredible beach tour packages in India.</p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 16 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 17 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 18 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
    </div>
    <!-- tour card container ends  -->
    <?php include('../Includes/bookingform.php') ?>
    <!-- footer starts  -->
    <?php include('../Includes/footer.php') ?>
    <!-- footer ends  -->

    <!-- custom js file  -->
    <script src="../JS/script.js"></script>

</body>

</html>