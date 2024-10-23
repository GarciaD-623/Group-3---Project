<?php 
include 'connect.php';

if(isset($_POST['signUp']))
{
	$username = $_POST['username'];
	$email= $_POST['email'];
	$password= $_POST['password'];
	$password=md5($password);
	$emailCheck= "SELECT * From users Where email='$email'";
	$result=$conn->query($emailCheck);

	if($result->num_rows>0){
		echo "Email already exist.";
	}
	else {
		$insertQuery= "INSERT INTO users(username,email,password) VALUES ('$username', '$email', '$password')";

		if($conn->query($insertQuery) == TRUE){
			header("Location: index.html");
		}
		else {
		echo "Error: ".$conn->error;
		}
	}
}


if(isset($_POST['signIn']))
{
	$email= $_POST['email'];
	$password= $_POST['password'];
	$password=md5($password);
	
	$sql= "SELECT * From users Where email='$email' and password='$password'";
	$result =$conn->query($sql);

		if($result->num_rows>0){
		session_start(); 
		$row=$result->fetch_assoc();
		$_SESSION['email']=$row['email'];
		header("Location: homepage.php");
	}
	else {
		echo "Not found, incorrect email or password.";
	}
}

?>