<?php
//$username=$_POST['username'];
//$password=$_POST['password'];
//echo $username;
//echo $password;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<style type="text/css">
		a{
			text-decoration: none;
		}
		a:hover{
			color: #b59bc6;
		}


	</style>
</head>
<body>
	<h1>WELCOME TO THE SIMPLE LOGIN SYSTEM</h1>
	Please select one of the option
	<ul>
		<li>LOGIN</li>
		<form method="POST" action="index.php">
			<input type="text" name = "username" placeholder="Enter username">
			<input type="password" name="password" placeholder="Enter password">
			<input type="submit" name="submit" value="Login">
		</form>
		<li><a href="register.php">REGISTER</a></li>
	</ul>
</body>
</html>