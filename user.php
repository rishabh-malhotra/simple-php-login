<?php
session_start();

if (isset($_SESSION['username'])){
	$username=$_SESSION['username'];
	$name=$_SESSION['name'];
	echo "hello $name with username : $username";
	echo " <p><b>WELCOME you are logged in!!</b>";
}
else{
	header('Location:index.php');
	die();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserPage</title>
</head>
<body>
	<form action="logout.php">
		<input type="submit" name="logout" value="LOGOUT">
	</form>
</body>
</html>