<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerala Tour Packages</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Kerala/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Kerala/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Kerala/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Kerala/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Kerala/animation4.jpg);
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
                <li class="active"><a>Kerala</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Kerala</span> Tour Packages</h1>
                <p>Here you get a wide range of Kerala Tourism Packages along with bountiful experiences, tailor made with fun, luxury and excitement. Explore the variety of Kerala tour packages offered for both domestic and international travellers that offer a beautiful rendezvous with the beauty of Kerala. Be it your honeymoon trip, a family trip or a trip you want to present yourself to rejuvenate with an ayurvedic treat - the best Kerala vacation packages are all you need to avail. You will find the best places to visit in Kerala Tour in every package . Starting from the usual tourist attractions like Munnar, Cochin, Periyar, and Thiruvananthapuram to the offbeat places like Kottayam, and Guruvayoor - We bring the best Kerala holiday deals that come with the best prices. </p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 12 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 9 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 17 ";
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