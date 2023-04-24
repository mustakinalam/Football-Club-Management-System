<?php
require_once('DBconnect.php');

if(isset($_POST['initial']) && isset($_POST['salary']) && isset($_POST['name']) && isset($_POST['position'])){
	
	$u = $_POST['initial'];
	$p = $_POST['salary'];
	$c = $_POST['name'];
	$a = $_POST['position'];
	
	$sql = " INSERT INTO club_staff VALUES( '$u', '$p', '$c', '$a' ) ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		
		header("Location: show_club_staffs.php");
		
	}
	else{
		header("Location: add_club_staffs.php");
		
	}
	
}


?>