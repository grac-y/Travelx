<?php include("../LoginSignupModel/config.php"); ?>

<?php
    session_start();
    if (isset($_SESSION['login_user'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['en_submit'])) {
                if (empty($_POST['en_name']) || empty($_POST['en_persons']) || empty($_POST['en_days']) || empty($_POST['en_departure']) || empty($_POST['en_trip']) || empty($_POST['en_email'])  ||  empty($_POST['en_contact'])) {
                    $_SESSION['booking'] = "emptyform";
                    header("location: ../LoginSignupModel/dashboard.php");
                    exit;
                } 
                else {
                    $username = $_POST['en_name'];
                    $persons = $_POST['en_persons'];
                    $departure = $_POST['en_departure'];
                    $days = $_POST['en_days'];
                    $trip = $_POST['en_trip'];
                    $email = $_POST['en_email'];
                    $contact = $_POST['en_contact'];

                    $query = "INSERT INTO booked_trips(user_name, persons, departure, days, trip_name, email, contact) values('$username', '$persons', '$departure' , '$days' , '$trip' , '$email', '$contact')";
                    $result = mysqli_query($conn, $query);

                    if (!$result) {
                        $_SESSION['booking'] = "notbooked";
                        header("location: ../LoginSignupModel/dashboard.php");
                        exit;
                    } 
                    else {
                        $_SESSION['booking'] = "booked";
                        header("location: ../LoginSignupModel/dashboard.php");
                        exit;
                    }
                    $conn->close();
                }
            }
        }
    } 
    else {
        $_SESSION['booking'] = "notloggedin";
        header("location: ../index.php");
        exit;
    }
?>