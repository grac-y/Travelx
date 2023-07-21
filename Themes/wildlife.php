<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wildlife Tours India</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Wildlife/animation_1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Wildlife/animation_1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Wildlife/animation_2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Wildlife/animation_3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Wildlife/animation_4.jpg);
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
                <li class="active"><a>Wildlife</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>India Wildlife</span> Tour Packages</h1>
                <p>India's national parks & wildlife sanctuaries are home to a rich flora & fauna, and a Wildlife
                    Safari, with its fair share of thrill & adventure, is the best way of exploring it. For all the
                    wildlife enthusiasts, we offer you a variety of wildlife holiday packages at unbeatable prices &
                    deal, which let you spot the rich wildlife of India at the most famous national parks and wildlife
                    sanctuaries like Kanha, Bandhavgarh, Pench, Gir, Corbett, Ranthambore & Kaziranga. From the majestic
                    Royal Bengal Tiger to the rare & endangered One Horned Rhinoceros, spot the exotic animals while
                    enjoying a safari with an expert driver & guide.</p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 1 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 2 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 3 ";
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