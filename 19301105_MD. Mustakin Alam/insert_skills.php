<?php
require_once('DBconnect.php');

if(isset($_POST['Jersey_No']) && isset($_POST['skills'])){
	
	$u = $_POST['Jersey_No'];
	$p = $_POST['skills'];
	
	$sql = " INSERT INTO skills VALUES( '$u', '$p' ) ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		
		header("Location: all_players.php");
		
	}
	else{
		header("Location: modify_skills.php");
		
	}
	
}


?>