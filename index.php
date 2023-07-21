<?php
    session_start();
?>

<?php 
    include("./LoginSignupModel/config.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Travelx</title>

    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- swiper cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- custom css file  -->
    <link rel="stylesheet" href="./CSS/common.css">
    <link rel="stylesheet" href="./CSS/index.css">

</head>

<body>

    <!-- header section  -->
    <?php include('../Travelx/Includes/navbar.php'); ?>

    <!-- SignUp Modal  -->
    <?php include('../Travelx/LoginSignupModel/signup.php'); ?>

    <!-- login model begins -->
    <?php include('../Travelx/LoginSignupModel/login.php'); ?>

    <!-- form for booking  -->
    <?php include('../Travelx/Includes/plantrip.php') ?>

    <!-- home section -->
    <section class="home" id="home">
        <div class="slide">
            <div class="box" style="background: url(./Images/home_bg_1.jpg) no-repeat;">
                <div class="content">
                    <span>Let us plan you a perfect</span>
                    <h3>India Holiday</h3>
                    <p>Personalised, well-crafted tour packages for best experiences. Interesting and Intriguing, India offers incredible holiday experiences through its cultural, topography, and wildlife diversity. With these amazing and unique experiences, it is one of the finest destinations for a holistic vacation.</p>
                    <a href="#container"><button class="btn">Get Started</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- container starts  -->
    <div class="container" id="container">
        <div class="category">
            <div class="heading_container">
                <h2 id="heading">Themes You Can Explore</h2>
            </div>
            <div class="themes ">
                <ul>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Wildlife/wildlife_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/wildlife.php">Wildlife</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Heritage/heritage_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/heritage.php">Heritage</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Pilgrimage/pilgrimage_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/pilgrimage.php">Pilgrimage</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Hill/hill_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/hill.php">Hill Station</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Adventure/adventure_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/adventure.php">Adventure</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="explore_theme_icone">
                            <div class="explore_area">
                                <figure>
                                    <img src="../Travelx/Images/Beach/beach_logo.png" alt="">
                                </figure>
                                <h3><a href="./Themes/beach.php">Beach</a></h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="india">
            <div class="heading_container">
                <h2 id="heading">Top Trending India Holiday Destinations</h2>
            </div>
            <div class="themes">
                <ul>
                    <li>
                        <div class="city">
                            <div class="city_image">
                                <a href="./IndiaDestination/rajasthan.php"><img src="../Travelx/Images/Rajasthan/rajasthan_logo.jpg" alt=""></a>
                            </div>
                            <div class="city_name">
                                <h3><a href="./IndiaDestination/rajasthan.php">Rajasthan</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="city">
                            <div class="city_image">
                                <a href="./IndiaDestination/himachal.php"><img src="../Travelx/Images/Himachal/himachal_logo.jpg" alt=""></a>
                            </div>
                            <div class="city_name">
                                <h3><a href="./IndiaDestination/himachal.php">Himachal</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="city">
                            <div class="city_image">
                                <a href="./IndiaDestination/kashmir.php"><img src="../Travelx/Images/Kashmir/kashmir_logo.jpg" alt=""></a>
                            </div>
                            <div class="city_name">
                                <h3><a href="./IndiaDestination/kashmir.php">Kashmir</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="city">
                            <div class="city_image">
                                <a href="./IndiaDestination/kerala.php"><img src="../Travelx/Images/Kerala/kerala_logo.jpg" alt=""></a>
                            </div>
                            <div class="city_name">
                                <h3><a href="./IndiaDestination/kerala.php">Kerala</a></h3>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="city">
                            <div class="city_image">
                                <a href="./IndiaDestination/uttarakhand.php"><img src="../Travelx/Images/Uttarakhand/uttarakhand_logo.jpg" alt=""></a>
                            </div>
                            <div class="city_name">
                                <h3><a href="./IndiaDestination/uttarakhand.php">Uttarakhand</a></h3>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>

    <!-- about section -->
    <div id="about_us" class="about_section">
        <video id="about_video" autoplay loop muted>
            <source src="./Images/video.mp4" type="video/mp4">
            <source src="./Images/video.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
        <div class="content">
            <div class="about_detail">
                <h2>About</h2>
                <p>We offer 24 X 7 hours services that include travel planning, itinerary design and transport facilities. We also provide holiday packages, customized as per client's need and budget.Our company specializes mainly in organizing Adventure, Cultural, Religious, hill station & wildlife tours in India through a sprawling network.Over the years our company has received positive feedbacks from its existing clients and hence one can expect a cordial reception.The team is prompt in their replies to client's queries, which has earned a reputation as one of the best and most efficient tour and travel operators in India by the clients and overseas partners.</p>
            </div>
        </div>
    </div>

    <!-- why choose us  -->
    <div class="why_choose_outer" id="about_us">
        <div class="inner">
            <div class="heading">
                <h3>Why Choose Us?</h3>
            </div>
            <div class="para">
                <p>More Than 20 Years Of Experience, Variety Of Tour Packages, Best Deals And Personalised Services.</p>
            </div>
            <div class="content">
                <div class="expert">
                    <div class="icon">
                        <i class="fa-solid fa-user-check"></i>
                    </div>
                    <div class="detail">
                        <h4>Experience</h4>
                        <p>Our dedicated travel team diligently works round-the-clock to design the best travel
                            experiences for the customers. The skilled team spends considerable amounts of time ideating
                            tour packages that guarantee to make travelling with us an experience like no other. We
                            select the finest hotels in every category, boast an excellent personal fleet of vehicles
                            for transportation.</p>
                    </div>
                </div>
                <div class="expert">
                    <div class="icon">
                        <i class="fa-regular fa-comment"></i>
                    </div>
                    <div class="detail">
                        <h4>Positive Customer Feedback</h4>
                        <p>We're truly humbled to have received volumes of positive customer feedback for our services. This appreciation from our prestigious clients is more valuable than any award for us. As a customer-driven travel company, our priority has always been their satisfaction. Therefore, our dedicated team of experts endeavours to achieve the goal of making our customers happy.</p>
                    </div>
                </div>
                <div class="expert">
                    <div class="icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <div class="detail">
                        <h4>Recognition</h4>
                        <p>We are proud to be accredited by major tour and travel associations in India and world like IATA, IATO, TAAI, IMF, MOT (Ministry of Tourism, Govt of India), and TOFT. It is an honour for us to be able to be a part of crucial initiatives towards safeguarding animal rights, protection of endangered species, and responsible mountaineering and trekking ventures.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- client review -->
    <div id="feedback" class="outer_wrapper">
        <div class="container">
            <div class="client_review">
                <h1>Client <span>Feedback</span></h1>
                <p>We aim at offering cut-edge services to our customers. Satisfied Customers are Happy Customers is our motto and we work towards it. We also like to hear from them, regarding our services which keeps us motivated to enhance our services. Here are a few words of praises from our esteemed customers.</p>
            </div>
            <div class="swiper client_feedback">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client1.png" alt="">
                            <div class="info">
                                <h3>Rehana ISSA, UK</h3>
                                <span>Travel Dates: </span> <span>18 to 28 Oct 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client2.png" alt="">
                            <div class="info">
                                <h3>John Deo, USA</h3>
                                <span>Travel Dates: 4 to 6 July 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client3.jpg" alt="">
                            <div class="info">
                                <h3>Sriram, India </h3>
                                <span>Travel Dates - 14 - 25 Dec 2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client4.png" alt="">
                            <div class="info">
                                <h3>Aditi Kenjalkar India</h3>
                                <span>Travel Dates-01 to 06 Jan 2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client5.png" alt="">
                            <div class="info">
                                <h3>Lim Qinyi Singapore</h3>
                                <span>Travel Dates-13 to 19 Dec 2019
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide">
                        <p class="text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius, esse distinctio eaque vero temporibus aliquam consequuntur, laborum ratione ipsum architecto eum velit itaque quia alias quam illo. Accusantium, qui nemo!</p>
                        <div class="user">
                            <img src="./Images/client6.jpg" alt="">
                            <div class="info">
                                <h3>Sudipta Das</h3>
                                <span>Travel Dates-14 to 21-Nov 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include('../Travelx/Includes/footer.php') ?>

    <!-- swiper js file link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- sweet alert js file link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Login Alert  -->
    <?php
    if (isset($_SESSION['login']) && $_SESSION['login'] != '') {
        if ($_SESSION['login'] == "login") {
    ?>
            <script>
                swal({
                    title: "Login Successful",
                    icon: "success",
                });
            </script>
    <?php
    }
        if ($_SESSION['login'] == "not") {
    ?>
            <script>
                swal({
                    text: "Username or password is invalid",
                    icon: "error",
                });
            </script>
    <?php
        }
        unset($_SESSION['login']);
    }
    ?>

    <!-- Signup alert  -->
    <?php
    if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
        if ($_SESSION['status'] == "created") {
    ?>
            <script>
                swal({
                    title: "Account created ",
                    text: "You can login now!",
                    icon: "success",
                });
            </script>
    <?php
        }
        if ($_SESSION['status'] == "notcreated") {
    ?>
            <script>
                swal({
                    title: "Account not created ",
                    text: "<?php echo $_SESSION['error']; ?>",
                    icon: "error",
                });
            </script>
    <?php
        }
        if ($_SESSION['status'] == "existing") {
    ?>
            <script>
                swal({
                    title: "Account Not Created",
                    text: "The user already exists ",
                    icon: "error",
                });
            </script>
    <?php
        }
        if ($_SESSION['status'] == "notvalid") {
    ?>
            <script>
                swal({
                    title: "Invalid Form",
                    icon: "error",
                });
            </script>
    <?php
        }
        unset($_SESSION['status']);
    }
    ?>

    <!-- plan trip alert  -->
    <?php
    if (isset($_SESSION['plantrip']) && $_SESSION['plantrip'] != '') {
        if($_SESSION['plantrip'] == "success"){
    ?>
            <script>
                swal({
                    title: "Successful!",
                    icon: "success",
                });
            </script>
    <?php
        }
        if($_SESSION['plantrip'] == "failure"){
    ?>
            <script>
                swal({
                    title: "Failure!",
                    text: "Try Again",
                    icon: "error",
                });
            </script>
    <?php
        }
        if($_SESSION['plantrip'] == "invalid"){
    ?>
            <script>
                swal({
                    title: "Invalid Form",
                    text: "Fill all the required fields",
                    icon: "error",
                });
            </script>
    <?php
        }
        unset($_SESSION['plantrip']);
    }
    ?>

<?php
        if(isset($_SESSION['booking']) && $_SESSION['booking'] != ''){
            if($_SESSION['booking']=="notloggedin"){
    ?>
             <script>
                swal({
                    title: "You are not logged in!",
                    icon: "error",
                });
            </script>
    <?php
            }
            unset($_SESSION['booking']);
        }
    ?>


    <!-- custom js file  -->
    <script src="./JS/script.js"></script>

</body>
</html>