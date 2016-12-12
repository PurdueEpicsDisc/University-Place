<?php 
$delete = 1;
$path = "../Images/";
//array_map('unlink', glob($path."*.png")); 
unlinkr($path);
function unlinkr($dir, $pattern = "*") {
        // find all files and folders matching pattern
        $files = glob($dir . "/$pattern"); 
        //interate thorugh the files and folders
        foreach($files as $file){ 
            //if it is a directory then re-call unlinkr function to delete files inside this directory     
            if (is_dir($file) and !in_array($file, array('..', '.')))  {
                unlinkr($file, $pattern);
                //remove the directory itself
                rmdir($file);
                } else if(is_file($file) and ($file != __FILE__)) {
                // make sure you don't delete the current script
                unlink($file); 
            }
        }
    }

header("Location: index.php?success=".$delete);
?>