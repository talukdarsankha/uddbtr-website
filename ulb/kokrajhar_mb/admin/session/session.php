<?php
session_start();

include '../../classes/Crud.php';

ini_set('display_errors', 1);

include 'deviceInfo.php';

$crud = new Crud();

// $details = $crud -> Read("details", " 1 ORDER BY `id` DESC LIMIT 1");

// $appName = $details[0]['app_name'];

// $appNameLower = strtolower($appName);


date_default_timezone_set('Asia/Kolkata');
    $connection = new DbConfig();
    $con = $connection -> connect();
    $username=$_POST['username'];
    $password=$_POST['password'];
    $userType=$_POST['userType'];
    $MB=$_POST['MB'];

    $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string

    $hash = hash('sha512', $password . $salt);

    $stmt=$con->prepare("SELECT * FROM `user` WHERE (`username` = '$username') AND `password`='$hash'");
    $stmt->execute();
    $row = $stmt -> fetch(PDO:: FETCH_ASSOC);
    if($stmt->rowCount()==1)
    {   
        if ($row['status'] == 0) {
            $_SESSION['errorLogin'] = "Your ID is not active. Please contact the administrator.";
            header("location: ../login");
        } else if ($row['status'] == 2) {

            $_SESSION['errorLogin'] = "You Have Been Banned from accessing this page!";
            header("location: ../login");

        } else if ($row['status'] == 3) {

            $_SESSION['errorLogin'] = "Former Members Need a different pass to login. Contact Administrator.";
            header("location: ../login");

        } else {
            $_SESSION[$appNameLower . '_email'] = $email;
            $_SESSION['this_user_id'] = $row['id'];
            $_SESSION['this_user_name'] = $row['name']." ".$row['surname'];
            $_SESSION['this_user_username'] = $row['username'];
            $_SESSION['userType'] = $row['userType'];
            $_SESSION['userMail'] = $row['email'];
            $_SESSION['user_image'] = $row['user_image'];

            $user_id = $row['id'];

            $os = getOs();

            $browser = getBrowser();

            $ip = $_SERVER['REMOTE_ADDR'];

            $login_date = date('Y-m-d');

            $login_time = date('H:i:s');

            $sql2 = $con -> prepare("INSERT INTO `login_details` (`user_id`, `os`, `browser`, `ip`, `login_date`, `login_time`) VALUES ('$user_id', '$os', '$browser', '$ip', '$login_date', '$login_time')");

            $sql2 -> execute();

            $_SESSION['errorLogin'] = "";

            header("location: ../index");
        }
    }
    else
    {
        $_SESSION['errorLogin'] = "Username or Password is incorrect. <br>Please try again.";

        header("location: ../login");

    }

?>
