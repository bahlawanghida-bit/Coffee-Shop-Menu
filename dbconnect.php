<?php

$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password,"coffeeshop");
if($conn->connect_error){
	die("COnnection failed: " . $conn->connect_error);
}
echo"Connected successfully";
?>

	