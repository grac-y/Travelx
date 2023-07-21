<?php include("../LoginSignupModel/config.php"); ?>

<?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['plantrip_submit'])) {
            if (empty($_POST['fullname']) || empty($_POST['country']) || empty($_POST['gmail']) || empty($_POST['description']) || empty($_POST['travel_date']) || empty($_POST['stay']) || empty($_POST['person_no']) || empty($_POST['contact'])) {
                $_SESSION['plantrip'] = "invalid";
                header("location: ../index.php");
                exit;
            } 
            else {
                $username = $_POST['fullname'];
                $country = $_POST['country'];
                $gmail = $_POST['gmail'];
                $description = $_POST['description'];
                $traveldate = $_POST['travel_date'];
                $stay = $_POST['stay'];
                $persons = $_POST['person_no'];
                $contact = $_POST['contact'];

                $query = "INSERT INTO plantrip(user_name, email, contact, travel_date, duration_of_stay, persons, description, country) values('$username', '$gmail', '$contact', '$traveldate', '$stay', '$persons', '$description', '$country')";

                $result = mysqli_query($conn, $query);

                if (!$result) {
                    $_SESSION['plantrip']="failure";
                    header("location: ../index.php");
                    exit;
                } 
                else {
                    $_SESSION['plantrip']="success";
                    header("location: ../index.php");
                    exit;
                }
                $conn->close();
            }
        }
    }
?>