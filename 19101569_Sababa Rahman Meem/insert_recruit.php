<?php
require_once('DBconnect.php');

if(isset($_POST['member_id']) && isset($_POST['staff_id'])){

    $u = $_POST['member_id'];
    $p = $_POST['staff_id'];

    $sql = " INSERT INTO recruit VALUES( '$u', '$p') ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_recruit.php");

    }
    else{
        header("Location: add_update_recruit.php");

    }

}


?>