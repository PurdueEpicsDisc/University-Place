<?php
include("loginserv.php"); // Include loginserv for checking username and password
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>University Place Login Page</title>
<style>
.login{
width:300px;
margin:5px auto;
font:verdana, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
margin-top:10px; 
}
input[type=text], input[type=password]{
width:80%;
padding:5px;
margin-top:5px;
border:1px solid #ccc;
padding-left:5px;
font-size:16px;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}

input[type=submit]{
width:80%;
background-color:#009;
color:#fff;
border:2px solid #ccc;
padding:8px;
font-size:20px;
cursor:pointer;
border-radius:5px;
margin-bottom:10px; 
}
</style>
</head>
<body>
<img src="UPRC_Login_4.PNG" style='width:100%;height:100%' alt='[]' />
<div class="login">
<h1 align="center" style="font-family:Kunstler Script, cursive;font-size:300%">Login</h1>
<form action="" method="post" style="text-align:center;">
<input style="font-family:verdana" type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input style="font-family:verdana" type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input style="background-color:tan" type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>