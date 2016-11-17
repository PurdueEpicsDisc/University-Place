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
    }
}

if (file_exists($target_file)) {
   //   echo '<script language="javascript">';
		 // echo 'alert("File already exists!")';
		 // echo '</script>';
    $uploadOk = 0;
}
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   //   echo '<script language="javascript">';
// 		//  echo 'alert("The file is too large!")';
// 		// echo '</script>';
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  //   echo '<script language="javascript">';
		// echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed!")';
	 // echo '</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //    echo '<script language="javascript">';
		//  echo 'alert("Error occurred!")';
		// echo '</script>';
        header("Location: index.php");
        exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  // 		echo '<script language="javascript">';
		// echo 'alert("Success!")';
		// echo '</script>';
        $success = 1;
		header("Location: index.php?success=".$success);
        exit();
    } else {
  //       echo '<script language="javascript">';
		// echo 'alert("Error occurred!")';
		// echo '</script>';
    }
}

$target_dir = "Images/";
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
    }
}

if (file_exists($target_file)) {
   //   echo '<script language="javascript">';
     // echo 'alert("File already exists!")';
     // echo '</script>';
    $uploadOk = 0;
}
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   //   echo '<script language="javascript">';
//    //  echo 'alert("The file is too large!")';
//    // echo '</script>';
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  //   echo '<script language="javascript">';
    // echo 'alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed!")';
   // echo '</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  //    echo '<script language="javascript">';
    //  echo 'alert("Error occurred!")';
    // echo '</script>';
        header("Location: index.php");
        exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
  //    echo '<script language="javascript">';
    // echo 'alert("Success!")';
    // echo '</script>';
        $success = 1;
    header("Location: index.php?success=".$success);
        exit();
    } else {
  //       echo '<script language="javascript">';
    // echo 'alert("Error occurred!")';
    // echo '</script>';
    }
}

?>