<?php
session_start();

$username=$_SESSION['username'];
$name=$_SESSION['name'];
echo "hello $name with username : $username";
echo " <p><b>WELCOME you are logged in!!</b>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserPage</title>
</head>
<body>
<form action="logout.php">
	<input type="submit" name="submit" value="LOGOUT">
</form>
</body>
</html>