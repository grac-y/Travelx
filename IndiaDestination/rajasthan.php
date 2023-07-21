<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajasthan Tour Packages</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Rajasthan/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Rajasthan/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Rajasthan/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Rajasthan/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Rajasthan/animation4.jpg);
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
                <li class="active"><a>Rajasthan</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Rajasthan</span> Tour Packages</h1>
                <p>Discover the incredible beauty of the land of royal palaces & forts with affordable Rajasthan Tour packages available here. Our packages cover the major exotic heritage attractions from all the popular tourist destinations of Rajasthan like Jaipur, Bikaner, Udaipur, Jaisalmer, Jodhpur and other offbeat places. Avail best discounts on Rajasthan family tour packages, honeymoon vacation tours and weekend tour packages 2021 by booking with us. With our affordable Rajasthan Travel Packages, discover the beauty of the state like never before! We're here to guide you keeping in mind your precise needs and make sure you enjoy a perfect vacation tour.</p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 5 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 19 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 20 ";
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