<?php 
$delete = 1;
$path = "../Images/";
array_map('unlink', glob($path."*.png")); 
header("Location: index.php?success=".$delete);
?>