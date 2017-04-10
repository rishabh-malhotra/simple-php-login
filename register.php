<?php

$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
//$sql=INSERT INTO `user`(`name`, `username`, `password`) VALUES ([$name],[$username],[$password]);

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
			<tr><td><input type="submit" value="REGISTER"></td></tr>
		</table>
		<h4>ALREADY REGISTERED..</h4>
		go to login page..<a href="login.php">CLick here</button>
	</form>
</body>
</html>