<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilgrimge Tours India</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Pilgrimage/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Pilgrimage/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Pilgrimage/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Pilgrimage/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Pilgrimage/animation4.jpg);
                background-size: 100% 100%;
            }
        }
    </style>
    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- custom css file  -->
    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/destination.css">
    <!-- <link rel="stylesheet" href="../CSS/package_detail.css"> -->
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
                <li class="active"><a>Pilgrimage</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Pilgrimage</span> Tour Packages</h1>
                <p>India is home to many sacred worship places spread across its length and breadth making it a top pilgrimage destination. There are innumerable Hindu and Jain Temples, gurudwaras, churches, mosques, and Buddhist Monasteries, which make a rare sight anywhere else in the world. We offer the best pilgrimage tours in India that assist you to top religious sites right from Mata Vaishno Devi to Amarnath Cave to Shirdi to Hazratbal and from Bada Chardham to Chhota Chardham to Tirupati Balaji to Golden Temple. We promise a memorable experience steeped in spirituality and comfort.</p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 7 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 8 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 9 ";
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