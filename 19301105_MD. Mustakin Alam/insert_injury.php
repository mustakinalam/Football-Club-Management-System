<?php
require_once('DBconnect.php');

if(isset($_POST['Jersey_No']) && isset($_POST['date']) && isset($_POST['injury_type']) && isset($_POST['return_date'])){
	
	$u = $_POST['Jersey_No'];
	$p = $_POST['date'];
	$c = $_POST['injury_type'];
	$a = $_POST['return_date'];
	
	$sql = " INSERT INTO injury VALUES( '$u', '$p', '$c', '$a' ) ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		
		header("Location: injury.php");
		
	}
	else{
		header("Location: modify_injury.php");
		
	}
	
}


?>