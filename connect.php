<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "user account";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
	echo "failed to connect to database".$conn->connect_error;
}
?>