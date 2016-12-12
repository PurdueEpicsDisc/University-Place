<?php
session_start();
//echo $_SESSION["name"];
if ($_SESSION["name"] == "admin"){
	$conn = mysqli_connect("localhost", "univeuo0_huen123", "05002355aA");
	//Selecting Database
	$db = mysqli_select_db($conn, "univeuo0_userdb");
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$categoryname = $_POST['category'];

	$sql = "INSERT INTO data (firstname, lastname, user, pass, category) 
	VALUES ('$first','$last','$uid','$pwd', '$categoryname')";
	$result = mysqli_query($conn,$sql);
	//echo $categoryname;
	//header("Location: index.php");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Success')
    window.location.href='index.php';
    </SCRIPT>");
}
else
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('No Admin Type')
    window.location.href='../index.php';
    </SCRIPT>");
}
?>