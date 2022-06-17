<?php
    session_start();
    $ImgErr=$Name=$Image="";
    $isset=false;

    if(isset($_SESSION['un'])){
        $currentdata = file_get_contents("Model/Information.json");  
        $currentdata = json_decode($currentdata, true); 
        foreach($currentdata as $key=>$value){
            if($value['Username']==$_SESSION["un"])
            {
            $Name=$value['Name'];
            $oldImage=$value['Image']; 
            $Gender=$value['Gender'];
            $Username=$value['Username']; 
            $DOB=$value['DOB'];
            $isset=true;
            break;
            }
        }
        if($isset){
             $Confirm_msg="";
        }else{
             $Errmsg="Something did not match";
        }

	$pictureErr= "";
    $ImgErr = $UploadConfirmation = "";
    $target_file="";

    if(isset($_POST['submit'])){
        $target_dir = "Image/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
       
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filepath = "";    
        if($_FILES['fileToUpload']['name'] != "")
        {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                
                $uploaded = 1;
            } else {
                $ImgErr = "File is not an image.";
                $uploaded = 0;
            }
        
            if (file_exists($target_file)) {
                $ImgErr = "Sorry, file already exists.";
                $uploaded = 0;
            }
        
            if ($_FILES["fileToUpload"]["size"] > 40000000000) {
                $ImgErr = "Sorry, this file is too large.";
                $uploaded = 0;
            }
        
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $ImgErr= "Only JPG, JPEG, PNG  files can be uploaded.";
                $uploaded = 0;
            }
        
            if ($uploadOk == 0) {
                $ImgErr = "Sorry, your file was not uploaded.";
            } 
            else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    $UploadConfirmation = "File has been uploaded Successfully";

                    $filepath = $target_dir . htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
                    $data = file_get_contents("Model/Information.json");

                    $data = json_decode($data, true);

                    if (!empty($data)) {

                        foreach ($data as $key => $row) {

                            if ($row["Username"] == $_SESSION['un']) {

                                $data[$key]['Image'] = $filepath;

                                $_SESSION['Image'] = $filepath;
                                $Image=$filepath;

                                break;

                            }

                        }



                        file_put_contents('Model/Information.json', json_encode($data));

                    }
                } else {
                    $ImgErr = "Sorry, there was an error uploading your file.";
                }
            }
        }else{
            $ImgErr="Select an image!";
        }
    }
}
    
?>