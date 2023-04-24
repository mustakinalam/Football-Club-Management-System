<?php
require_once('DBconnect.php');

if(isset($_POST['staff_id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['salary']) && isset($_POST['supervisor'])){

    $u = $_POST['staff_id'];
    $p = $_POST['name'];
    $c = $_POST['email'];
	$a = $_POST['salary'];
    $b = $_POST['supervisor'];

    $sql = " INSERT INTO shop_staff VALUES( '$u', '$p', '$c', '$a', '$b') ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_shop_staff.php");

    }
    else{
        header("Location: add_update_shop_staff.php");

    }

}


?>