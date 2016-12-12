<?php

if($_FILES["zip_file"]["name"]) {
  $filename = $_FILES["zip_file"]["name"];
  $source = $_FILES["zip_file"]["tmp_name"];
  $type = $_FILES["zip_file"]["type"];
  
  $name = explode(".", $filename);
  $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
  foreach($accepted_types as $mime_type) {
    if($mime_type == $type) {
      $okay = true;
      break;
    } 
  }
  
  $continue = strtolower($name[1]) == 'zip' ? true : false;
  if(!$continue) {
    $message = -1;
     header("Location: index.php?message=".$message);
        exit();
  }

  $target_path = "../Images/".$filename;  // change this to the correct site path
  if(move_uploaded_file($source, $target_path)) {
    $zip = new ZipArchive();
    $x = $zip->open($target_path);
    if ($x === true) {
      $zip->extractTo("../Images/"); // change this to the correct site path
      $zip->close();
  
      unlink($target_path);
    }
    $message = 1;

  $files = scandir("../Images/Day02/");
  $oldfolder = "../Images/Day02/";
  $newfolder = "../Images/";
  foreach($files as $fname) {
      if($fname != '.' && $fname != '..') {
          rename($oldfolder.$fname, $newfolder.$fname);
      }
  }
    header("Location: index.php?message=".$message);
        exit();
    } else {  
    $message = 0;
     header("Location: index.php?message=".$message);
        exit();
  }
}else{
   $message = -2;
        header("Location: index.php?message=".$message);
        exit();
}
?>