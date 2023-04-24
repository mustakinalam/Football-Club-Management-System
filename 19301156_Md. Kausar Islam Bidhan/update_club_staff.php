<?php
require_once('DBconnect.php');

if(isset($_POST['salary']) && isset($_POST['name']) && isset($_POST['position']) && isset($_POST['initial'])){

    $u = $_POST['salary'];
    $p = $_POST['name'];
    $a = $_POST['position'];
	$b = $_POST['initial'];

    $sql = " UPDATE club_staff SET salary='$u',name='$p',position='$a' WHERE initial='$b'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_club_staffs.php");

    }
    else{
        header("Location: add_club_staffs.php");

    }

}


?>