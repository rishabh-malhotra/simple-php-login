<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="login";

	// Create connection
	$conn = new mysqli($servername, $username, $password,$db);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	if($_POST['register']){
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$result=mysqli_query($conn,"INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username','$password')");
		//echo "REGISTRATION Successful";
		//else
		//echo "Can't Register try again";	
	if($result){
		echo "REGISTRATION Successful";
	}
	else
		echo "Can't Register try again";
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
</head>
<body>
	<h1>REGISTRATION PAGE</h1>
	<form method="POST" action="register.php">
		<table>
			<tr><td>NAME: </td><td><input type="text" name="name" placeholder="Enter your name"></td></tr>
			<tr><td>USERNAME: </td><td><input type="text" name="username" placeholder="Choose your username"></td></tr>
			<tr><td>PASSWORD: </td><td><input type="password" name="password" placeholder="Enter your selected password"></td></tr>
			<tr><td><input type="submit" name="register" value="REGISTER"></td></tr>
		</table>
		<h4>ALREADY REGISTERED..</h4>
		go to login page..<a href="index.php">CLick here</a></button>
	</form>
</body>
</html>