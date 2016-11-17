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

<h1>Choose the file to upload</h1>
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
  if($success == 0){
     echo '<script>';
    echo 'alert("Upload failed!");';
    echo '</script>';
  }
}
?>

<div class="galleria">
    <?php $dir = $_SERVER['DOCUMENT_ROOT']."/Images/";
$gimages = glob($dir."*.png");
$id = 0;
foreach($gimages as $gimage) {
  $id = $id +1;
    echo '<img src="'.$gimage.'" >';
}?>
</div>

<h1>Choose file to delete</h1>
<form action="delete.php" method="post">

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