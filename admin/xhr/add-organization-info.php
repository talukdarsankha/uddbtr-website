<?php 
session_start();
if (empty($_SESSION['userType']) || $_SESSION['userType']!="ADMIN") {
   $_SESSION['errorLogin'] = "Access Denied!";
   header('location: ../login.php');
   exit();
} else {
   include '../../classes/Crud.php';
   $crud = new Crud();
   date_default_timezone_set("Asia/Kolkata");
   $today = date("Y-m-d");
   $time = date("H:i:s");
   $userType = $_SESSION['userType'];
}

if(isset($_FILES['image'])){

    extract($_POST);

        $uploadOk = 1;
        $pdfOk=1;

        $target_dir = "img/organizationInfo/";
        $target_file = $target_dir . md5(time()).basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        $pdfFile= $target_dir . md5(time()).basename($_FILES["pdf"]["name"]);
        $pdfFileType = strtolower(pathinfo($pdfFile,PATHINFO_EXTENSION));
        
        $check = getimagesize($_FILES["image"]["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
        } else{
            $uploadOk = 0;
        } 

            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {         
            $uploadOk = 0;
        }

        if($pdfFileType != "pdf" ) {         
            $pdfOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $data["errorMessage"]="something wrong with image file.";
            echo json_encode($data);
            exit;
        // if everything is ok, try to upload file
        } 
        if($pdfOk == 0){
            $data["errorMessage"]="something wrong with pdf file.";
            echo json_encode($data);
            exit;
        }
  

            if (move_uploaded_file($_FILES["image"]["tmp_name"], "../".$target_file) && move_uploaded_file($_FILES["pdf"]["tmp_name"], "../".$pdfFile)) {

              // $_SESSION['message']= "The file ". basename( $_FILES["aboutImage"]["name"]). " has been uploaded.";
                $data = [
                    'image' => $target_file,                   
                    'pdf' =>$pdfFile,
                    'udd_information' =>$uddInformation,                        
                ];
               
                    $create = $crud->Create($data,"organization_info");

                    if($create) {
                        $data["successMessage"]="Data uploaded successfully.";
                    } else {
                        $data["errorMessage"]="Error uploading Data.";
                    }                                 

            } else {
                $data["errorMessage"]="file can't move to the folder.";
            }

    
    echo json_encode($data);
    exit();
}
?>


