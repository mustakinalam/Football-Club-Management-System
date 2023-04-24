<?php
require_once('DBconnect.php');

if(isset($_POST['member_id']) && isset($_POST['name']) && isset($_POST['joining_date'])){

    $u = $_POST['member_id'];
    $p = $_POST['name'];
    $c = $_POST['joining_date'];

    $sql = " INSERT INTO board VALUES( '$u', '$p', '$c') ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_board_members.php");

    }
    else{
        header("Location: add_update_board_members.php");

    }

}


?>