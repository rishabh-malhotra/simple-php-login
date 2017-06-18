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
session_start();
if(isset($_POST['register'])){
	$val=$_POST['register'];
	if($val!=NULL){
		$name=$_POST['name'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql = "SELECT  `username` FROM `user` where username = '$username' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		if($query) {
			
			$row = mysqli_fetch_row($query);
			$dbUserName = $row[0];
		}
		if($username == $dbUserName){
			echo "This username already exists Choose another one";
		}			

		else{
			$result=mysqli_query($conn,"INSERT INTO `user`(`name`, `username`, `password`) VALUES ('$name','$username','$password')");	
			if($result!=NULL){
				if($result){
					echo "REGISTRATION Successful<p><b>Redirecting to index.php so you can log in:)</b></p>";
					header("Refresh:5; url=index.php", true, 130);	
				}
				else
					echo "Can't Register try again";
			}
		}
	}
	else
		echo "";}
	?>



	<!DOCTYPE html>
	<html>
	<head>
		<title>REGISTER</title>
	</head>
	<body>
		<h1 style="font-family: helvetica;">REGISTRATION PAGE</h1>
		<form method="POST" action="register.php">
			<table>
				<tr><td>NAME: </td><td><input type="text" name="name" placeholder="Enter your name"></td></tr>
				<tr><td>USERNAME: </td><td><input type="text" name="username" placeholder="Choose your username"></td></tr>
				<tr><td>PASSWORD: </td><td><input type="password" name="password" placeholder="Enter your selected password"></td></tr>
				<tr><td><input type="submit" name="register" value="REGISTER"></td></tr>
			</table>
			<h4>IF ALREADY REGISTERED..</h4>
			go to login page..<a href="index.php">CLICK here</a></button>
		</form>
	</body>
	</html>