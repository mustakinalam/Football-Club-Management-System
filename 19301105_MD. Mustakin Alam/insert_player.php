<?php
require_once('DBconnect.php');

if(isset($_POST['Jersey_No']) && isset($_POST['First_Name']) && isset($_POST['Last_Name']) && isset($_POST['Age'])){
	
	$u = $_POST['Jersey_No'];
	$p = $_POST['First_Name'];
	$c = $_POST['Last_Name'];
	$a = $_POST['Age'];
	
	$sql = " INSERT INTO player VALUES( '$u', '$p', '$c', '$a' ) ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		
		header("Location: all_players.php");
		
	}
	else{
		header("Location: modify_players.php");
		
	}
	
}


?>