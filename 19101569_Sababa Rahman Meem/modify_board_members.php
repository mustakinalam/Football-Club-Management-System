<?php
require_once('DBConnect.php');

if(isset($_POST['member_id']) && isset($_POST['name']) && isset($_POST['joining_date'])){

    $u = $_POST['member_id'];
    $p = $_POST['name'];
	$a = $_POST['joining_date'];

    $sql = " UPDATE board SET member_id ='$u',name='$p' WHERE joining_date='$a'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_board_members.php");

    }
    else{
        header("Location: add_update_board_members.php");

    }

}


?>