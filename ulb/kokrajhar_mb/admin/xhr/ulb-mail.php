<?php 

include '../../classes/Crud.php';
$crud = new Crud();
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");

if(isset($_POST['email'])){

    extract($_POST);
  
    $to = 'sagartalukdar0123456789@gmail.com';
    $from = $email;
    $subject = $subject;
    // $message = "<h2>Mail Received!</h2>";
    $message .=" My Name is: ". $name. "My Contact Details are as follows Email :". $email.", phone number :".$phone." and my message is :".$message. "<br>Please Consider me as a website User";

    $header = "From:" . $email . " \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-type: text/html;charset=UTF-8 \r\n";

    $result = mail($to, $subject, $message, $header);

    if($result){
    
        // header("location: C:\xampp\htdocs\chc\chc-admin\xhr\contact-chc.php");
        $data['successMessage'] = "The mail has been sent";

    } else {
        $data['errorMessage'] =  "The mail could not be sent";
        
        // header("location: join-trader.php");
    }
    echo json_encode($data);
    
}
?>