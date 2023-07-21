<?php include ("./config.php"); ?>
<?php
session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['signup_submit'])){
            if(empty($_POST['signup_fullname']) || empty($_POST['signup_psw']) || empty($_POST['signup_phone']) || empty($_POST['signup_email']) || empty($_POST['signup_gender'])){
                $_SESSION['status'] = "notvalid";
                header("location: ../index.php");
                exit;
            }
            else{
                $username = $_POST['signup_fullname'];
                $phone = $_POST['signup_phone'];
                $email = $_POST['signup_email'];
                $psw = $_POST['signup_psw'];
                $gender = $_POST['signup_gender'];
                $check_email =mysqli_query($conn, "SELECT email FROM users where email = '$email' ");
                if(mysqli_num_rows($check_email) > 0)
                {
                    $_SESSION['status'] = "existing";
                    header("location: ../index.php");
                    exit;
                }
                $query = "INSERT INTO users(full_name, phone, email, password, gender) values('$username', '$phone', '$email', '$psw', '$gender')";
                $result = mysqli_query($conn, $query);
                if(!$result){
                    $_SESSION['status'] = "notcreated";
                    $_SESSION['error'] = mysqli_error($conn);
                    header("location: ../index.php");
                }
                else{
                    $_SESSION['status'] = "created";
                    header("location: ../index.php");
                }
                $conn->close();
            }
        }
    }
?>
