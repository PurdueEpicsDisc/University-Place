<?php
session_start(); 
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['user']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "univeuo0_huen123", "05002355aA");
 //Selecting Database
 $db = mysqli_select_db($conn, "univeuo0_userdb");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM data WHERE pass='$pass' AND user='$user'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 $rowinfo = mysqli_fetch_array($query, MYSQL_ASSOC);
	//$fromid = $rows['category'];
	$_SESSION["name"] = $rowinfo['category'];
	//echo $row['category'];
	//header("Location: redirectpage.php");
	if ($rowinfo['category'] == "admin"){
		header("Location: upload/index.php"); // redirecting to 
		//echo "$query";
	}
	else if ($rowinfo['category'] == "family"){
		//echo "$query";
		header("Location: /mainpage/index.php"); //redirect to normal page
	}
	else if ($rowinfo['category'] == "resident"){
		header("Location: /mainpage/index.php");
	}
	else{ // bullet proof
		$error = "Username of Password is Invalid";
	}
 }
else
 {
	$error = "Username of Password is Invalid";
 }
mysqli_close($conn); // Closing connection
 }
}
?>