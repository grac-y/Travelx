<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adventure Tours India</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Adventure/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Adventure/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Adventure/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Adventure/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Adventure/animation4.jpg);
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
                <li class="active"><a>Adventure</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1>Adventure in <span>India</span></h1>
                <p>From the colourful world of coral reefs lying underneath the blue waters of Andaman and Lakshadweep to enjoying a bike ride on Khardung La (one of the highest motorable roads in the world) in Ladakh to the conquering thrill of high Himalaya in nature's unfavorable mood – adventure tourism in India welcomes you to a world where fear and thrill goes hand-in-hand! Here you are offered customized adventure travel packages that provide that oomph of thrill and excitement to explorers and adventureaholics. Whatever you want to enjoy and do, our packages will definitely keep your rocking spirit alive. </p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 13 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 14 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 15 ";
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