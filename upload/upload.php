<?php
$target_dir = "../Images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$success = 0;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
        $success = -1;
        header("Location: index.php?success=".$success);
        exit();
    }
}

if (file_exists($target_file)) {

    $uploadOk = 0;
    $success = -2;
    header("Location: index.php?success=".$success);
        exit();
}
// Allow certain file formats
if(exif_imagetype($target_file) == 3) {
     $uploadOk = 0;
    $success = -3;
    header("Location: index.php?success=".$success);
        exit();
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
        $success = -4;
        header("Location: index.php?success=".$success);
        exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
         $success = 1;
		header("Location: index.php?success=".$success);
        exit();
    } else {
      $success = 0;
      header("Location: index.php?success=".$success);
        exit();
     }
}

?>