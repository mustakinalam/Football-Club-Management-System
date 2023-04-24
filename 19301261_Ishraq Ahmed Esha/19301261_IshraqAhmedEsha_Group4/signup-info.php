<?php 

// $conn = mysqli_connect("localhost", "root");

// if($conn){
// 	echo "Connection successful!";
// }
// else{
// 	echo "No Connection";
// }

// mysqli_select_db($conn, "football_club_management");

session_start();
include "db_conn.php";

$name = $_POST['name'];
$email = $_POST['email'];
$uid = $_POST['uid'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$region = $_POST['region'];
$dob = $_POST['dob'];

$query = "insert into users values ('$name', '$email', '$uid', '$password', '$phone', '$region', '$dob') ";

mysqli_query($conn, $query);
header("Location: login.php");

?>