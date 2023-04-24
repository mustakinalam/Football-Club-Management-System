<?php
require_once('DBconnect.php');

if(isset($_POST['shop_id'])){

    $u = $_POST['shop_id'];


    $sql = " INSERT INTO gift_package VALUES( '$u' ) ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_gift_packages.php");

    }
    else{
        header("Location: add_delete_gift_packages.php");

    }

}


?>