<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
<link rel="stylesheet" type="text/css" href="slider.css">
<link rel="stylesheet" type="text/css" href="image-picker.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <script src="galleria/galleria-1.4.7.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.slides.min.js"></script>

   <style>
    .galleria{ width: 700px; height: 400px; background: #000 }
</style>

</head>

<body>


<a href="registerpage.html">Register</a>
<h1>Choose image file to upload</h1>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" multiple>
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
  
  if($success = $_GET['success']){
  if ($success == 1){ 
    echo '<script>';
    echo 'alert("Success!");';
    echo '</script>';
     }
  else if($success == 0){
     echo '<script>';
    echo 'alert("Upload failed!");';
    echo '</script>';
  }else if($success == -1){
    echo '<script>';
    echo 'alert("Not an image!");';
    echo '</script>';
  }else if($success == -2){
    echo '<script>';
    echo 'alert("File exists!");';
    echo '</script>';
  }else if($success == -3){
    echo '<script>';
    echo 'alert("Sorry only PNG files are allowed!");';
    echo '</script>';
  }else if($success == -4){
    echo '<script>';
    echo 'alert("Upload failed!");';
    echo '</script>';
  }
}
?>

<h1>Choose zip file to upload</h1>
<form action="uploadzip.php" method="post" enctype="multipart/form-data">
    Select zip file to upload:
    <input type="file" name="zip_file" id="fileToUpload" >
    <input type="submit" value="Upload Zip File" name="submit">
</form>
<?php
  
  if($message = $_GET['message']){
  if ($message == 1){ 
    echo '<script>';
    echo 'alert("Success!");';
    echo '</script>';
     }
  else if($message == 0){
     echo '<script>';
    echo 'alert("Upload failed!");';
    echo '</script>';
  }else if($message == -1){
    echo '<script>';
    echo 'alert("Please upload a zip file!");';
    echo '</script>';
  }else if($message == -2){
    echo '<script>';
    echo 'alert("Please choose a file!");';
    echo '</script>';
  }
}
?>
<br>
<div class="galleria">
    <?php $dir = "../Images/";
$gimages = glob($dir."*.png");
if(count($gimages) === 0){
  echo '<img src= "placeholder.png" >';
}else{
foreach($gimages as $gimage) {
    echo '<img src="'.$gimage.'" >';
}
}?>
</div>

<h1>Choose file to delete</h1>
<form action="delete.php" method="post" onclick="return confirm('Are you sure you want to delete all the files?');" >

	<input type="submit" value="Delete all files">
</form>
<script>
  (function() { 
            Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');
            Galleria.run('.galleria',{
              autoplay: 7000
            });
        }());
</script>
</body>
</html>