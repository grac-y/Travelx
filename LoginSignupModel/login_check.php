<?php include ("./config.php"); ?>
<?php
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if (isset($_POST['login_submit'])){
            if(empty($_POST['login_uid']) || empty($_POST['login_psw'])){
                $_SESSION['login'] = "not";
                header("location: ../index.php");
                exit;
            }
            else{
                $userid = $_POST['login_uid'];
                $psw = $_POST['login_psw'];
                $query = "SELECT * from users where email = '$userid' AND password = '$psw'";
                $result = mysqli_query($conn, $query);
                $rows = mysqli_num_rows($result);
                if($rows == 1) {
                    $_SESSION['login'] = "login";
                    $_SESSION['login_user'] = $userid;
                    header("location: ../index.php");
                 }
                 else {
                    $_SESSION['login'] = "not";
                    header("location: ../index.php");  
                }
                mysqli_close($conn);
            }
        }
    }
?>