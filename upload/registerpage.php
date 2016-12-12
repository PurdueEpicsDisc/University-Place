<!DOCTYPE html>
<html>
<form action="signup.php" method="POST">
	Enter First Name: <input type="text" name="first" placeholder="Firstname"><br><br>
	Enter Last Name: <input type="text" name="last" placeholder="Lastname"><br><br>
	Enter Desire User Name: <input type="text" name="uid" placeholder="Username"><br><br>
	Enter Password: <input type="password" name="pwd" placeholder="Password"><br><br>
	Enter User Category: 
	<select name="category">
		<option value="admin">Admin</option>
		<option value="family">Family</option>
		<option value="resident">Resident</option>
	</select>
	<input type="submit" value="Register" name="submit" />
</form>
</body>
</html>


<?php
session_start();
echo $_SESSION["name"];
if(isset($_POST["submit"])){
if ($_SESSION["name"] == "admin"){
	$conn = mysqli_connect("localhost", "univeuo0_huen123", "05002355aA") or die(mysql_error());
	//Selecting Database
	$db = mysqli_select_db($conn, "univeuo0_userdb") or die("cannot select DB");
	$first = $_POST['first'];
	$last = $_POST['last'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	$categoryname = $_POST['category'];

	$sql = "INSERT INTO data (firstname, lastname, user, pass, category) 
	VALUES ('$first','$last','$uid','$pwd', '$categoryname')";
	$result = mysqli_query($conn,$sql);
	//echo $categoryname;
	header("Location: index.php");
}
else
{
	//echo "NOT RIGHT PERMISSION TYPE, PLEASE GO BACK TO PREVIOUS PAGE";
}
}
?>