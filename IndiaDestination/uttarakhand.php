<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uttarakhand Tour Packages</title>
    <style>
        .inner_banner .introduction .banner_image {
            background: url(../Images/Uttarakhand/animation1.jpg);
            animation: slider 9s infinite linear;
        }

        @keyframes slider {
            0% {
                background: url(../Images/Uttarakhand/animation1.jpg);
                background-size: 100% 100%;
            }

            25% {
                background: url(../Images/Uttarakhand/animation2.jpg);
                background-size: 100% 100%;
            }

            50% {
                background: url(../Images/Uttarakhand/animation3.jpg);
                background-size: 100% 100%;
            }

            75% {
                background: url(../Images/Uttarakhand/animation4.jpg);
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
                <li class="active"><a>Uttarakhand</a></li>
            </ul>
        </div>
        <div class="introduction">
            <div class="intro">
                <h1><span>Uttarakhand</span> Tour Packages</h1>
                <p>Travellers of all kinds can get the best tourism opportunities in Uttarakhand, the Himalayan state in India, with our various Uttarakhand sightseeing tour packages. Find the best deals on Uttarakhand tour pacUttarakhandfor a family vacation, spiritual tour, nature exploration, adventure or honeymoon tour in the picturesque Dev Bhumi (the Land of Gods). Tour My India offers a wide range of holiday packages with best deals ensuring an unmatched travel experience you will not find anywhere else. Our years of experience in organizing tours in the Uttarakhand Himalayas make us familiar with every region and destination of this beautiful state. Therefore, we offer the best holiday experience with our Uttarakhand tourism packages to suit the taste of our customers.</p>
            </div>
            <div class="banner_image"></div>
        </div>
    </div>
    <!-- inner banner ends  -->
    <?php include("../LoginSignupModel/config.php"); ?>
    <!-- tour card container starts  -->
    <div class="tour_card_container">
        <?php
        $sql = "SELECT * from destinations where id = 25 ";
        include("../Includes/tripdata.php");
        include("../Includes/tour_content.php");
        ?>
        <?php
        $sql = "SELECT * from destinations where id = 13 ";
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