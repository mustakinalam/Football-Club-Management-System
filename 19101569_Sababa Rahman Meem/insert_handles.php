<?php
require_once('DBconnect.php');

if(isset($_POST['shop_id']) && isset($_POST['staff_id'])){

    $u = $_POST['shop_id'];
    $p = $_POST['staff_id'];

    $sql = " INSERT INTO handles VALUES( '$u', '$p') ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_handles.php");

    }
    else{
        header("Location: add_update_handles.php");

    }

}


?>