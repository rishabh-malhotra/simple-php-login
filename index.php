<?php

$servername = "localhost";
$dusername = "root";
$password = "";
$db="login";

	// Create connection
$conn = new mysqli($servername, $dusername, $password,$db);

	// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$username=$_POST['username'];
$password=$_POST['password'];
 
$sql = "SELECT `name`, `username`, `password` FROM `user` where username = '$username' LIMIT 1";
$query = mysqli_query($conn, $sql);
if($query) {
	$row = mysqli_fetch_row($query);
	$name= $row[0];
	$dbUserName = $row[1];
	$dbPassword = $row[2];
}
if($username == $dbUserName && $password == $dbPassword) {

	echo "hello $name with username : $username and password : $dbPassword";
	echo " <p><b>WELCOME you are logged in!!</b>";
	//$_SESSION['username'] = $username;
	//$_SESSION['id'] = $userId;
	//header('Location: user.php');


}
else {
	echo "<b><i>Incorrect credentials</i><b>";

}

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
	<h1 style="font-family: helvetica;">WELCOME TO THE SIMPLE LOGIN SYSTEM</h1>
	
	<p>Please select one of the option:-</p>

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