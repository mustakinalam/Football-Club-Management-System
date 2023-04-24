<?php
require_once('DBconnect.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['salary']) && isset($_POST['supervisor']) && isset($_POST['staff_id'])){

    
    $p = $_POST['name'];
    $c = $_POST['email'];
	$a = $_POST['salary'];
    $b = $_POST['supervisor'];
	$u = $_POST['staff_id'];

    $sql = " UPDATE shop_staff SET name='$p', email='$c', salary='$a', supervisor='$b' WHERE staff_id ='$u'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_shop_staff.php");

    }
    else{
        header("Location: add_update_shop_staff.php");

    }

}


?>