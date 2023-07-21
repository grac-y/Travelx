<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kashmir Tour Packages</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Kashmir/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Kashmir/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Kashmir/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Kashmir/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Kashmir/animation4.jpg);
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
                <li class="active"><a>Kashmir</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Kashmir</span> Tour Packages</h1>
                <p>Fall in love with Jammu & Kashmir with our affordable Kashmir tour packages. Jammu & Kashmir is a world famous tourist destination whose beauty is not only in its landscape but also in its people and culture as well. Here you are offered the best tourism holiday packages for Jammu & Kashmir that are tastefully designed for offering the best family tour, romantic honeymoon experience, thrilling trekking adventure, wildlife holiday as well as a sacred pilgrimage tour. Jammu and Kashmir offers immense possibilities of holiday experience for the tourists from its tourism treasures. Come, explore & spend a few days in Kashmir, the paradise on earth by booking Kashmir holiday packages at the best deals & prices. </p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 22 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 23 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 24 ";
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