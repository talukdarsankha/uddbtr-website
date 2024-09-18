<?php 
session_start();
error_reporting(E_ALL);

if (isset($_SESSION['userType']) && isset($_SESSION['this_user_MB'])) {
   if ($_SESSION['userType'] != "EO" && $_SESSION['userType'] != "CP" && $_SESSION['userType'] != "ADMIN") {
      $_SESSION['errorLogin'] = "Access Denied!";
      header('location: ../login-test');
      exit();
   }
} 

if (isset($_POST['schemeId'])) {
 
  include '../../classes/Crud.php';
  $crud = new Crud();
  date_default_timezone_set("Asia/Kolkata");
  $today = date("Y-m-d");
  $time = date("H:i:s");
  $sessionName = $_SESSION['this_user_username'];
  $userType = $_SESSION['userType'];
  // $userID = $_SESSION['this_user_id'];
  extract($_POST);

  $countUser = $crud->Delete("schemes","`id`='$schemeId'");
  if ($countUser) {
    $isTrue=true;

    $schemeDetails=$crud->Read("scheme_details","`scheme_id`=$schemeId");
    foreach($schemeDetails as $sd){
      $deleteSchemeDetails = $crud->Delete("scheme_details","`scheme_id`=$schemeId");
      if(!$deleteSchemeDetails){
        $isTrue=false;
      }
    }
   
    if($isTrue){
      $data['successMessage'] = "Scheme Deleted Successfully";
    }else{
      $data['errorMessage'] = "Error deleting data.";
    }

  } else {
      $data['errorMessage'] = "Error deleting data.";
  }
    
  echo json_encode($data);
}
?>