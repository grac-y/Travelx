<?php include("./config.php"); ?>
<?php
session_start();

$user_check = $_SESSION['login_user'];
$sql = "SELECT * from users where email = '$user_check' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$login_Session = $row['full_name'];
if (!isset($login_Session)) {
    mysqli_close($conn);
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- font-awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


    <!-- custom css file  -->
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/common.css">
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/destination.css">
    <style>
        .tour_card_container .tour_card_row .content_container .button_container{
            width: 190px;
            font-size: 19px;
        }
    </style>
</head>

<body style="background: #ffff;">

    <!-- header section starts  -->
    <?php include('../Includes/navbar.php'); ?>
    <!-- header section ends  -->


    <!-- SignUp Modal  -->
    <?php include('../LoginSignupModel/signup.php'); ?>
    <!-- Signup model ends  -->


    <!-- login model begins -->
    <?php include('../LoginSignupModel/login.php'); ?>
    <!-- login model ends -->
    <div class="main_section">
        <div class="profile">
            <div class="title">
                <h1>Welcome <span><?php echo $login_Session; ?></span></h1>
            </div>
            <div class="book_card">
                <h3>Booking History</h3>
            </div>
            <div class="tour_card_container booked_trips_table">
            <table>
            <tbody>
                <?php
                $query = "SELECT trip_name from booked_trips where user_name = '$login_Session'";
                $res = mysqli_query($conn, $query);
                $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
                foreach ($rows as $rowi) {
                ?>
                <tr>
                    <td>
                        <?php
                    $tripname = $rowi['trip_name'];
                    $sql_query = "SELECT * from destinations where trip_name = '$tripname' ";
                    $tripresult = mysqli_query($conn, $sql_query);
                    $triprow = mysqli_fetch_assoc($tripresult);
                    $trip_name = $triprow['trip_name'];
                    $price = $triprow['price'];
                    $days = $triprow['duration'];
                    $nights = $days - 1;
                    $image = $triprow['Images'];
                    $view = $triprow['View'];
                    include("../Includes/tour_content.php");
                    ?>
                    </td>
                    <td><button id="cancel_btn"><i class="fa-solid fa-circle-xmark"></i></button></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
            
        </div>

        <div class="dashboard_footer">
            <div class="links">
                <a href="">Home</a>
                <a href="">Destinations</a>
                <a href="">Reviews</a>
                <a href="">About</a>
            </div>
            <div class="copyright">© 2022 Copyright Travelx </div>
        </div>
    </div>

     <!-- sweet alert js file link -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        
        let array = document.querySelectorAll(".booked_trips_table .button_container a");
        array.forEach(element => {
            element.innerHTML = "Make Payment";
        });
    </script>

    <?php
        if(isset($_SESSION['booking']) && $_SESSION['booking'] != ''){
            if($_SESSION['booking']=="emptyform"){
    ?>
             <script>
                swal({
                    title: "Invalid Form!",
                    text: "Fill all the required fields",
                    icon: "error",
                });
            </script>
    <?php
            }
            if($_SESSION['booking']=="booked"){
    ?>
             <script>
                swal({
                    title: "Successful",
                    icon: "success",
                });
            </script>
    <?php
            }
            if($_SESSION['booking']=="notbooked"){
    ?>
             <script>
                swal({
                    title: "Failure",
                    text: "Try Again",
                    icon: "error",
                });
            </script>
    <?php
            }
            unset($_SESSION['booking']);
        }
    ?>

    <script src="../JS/script.js"></script>
</body>

</html>