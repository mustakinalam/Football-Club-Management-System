<?php
require_once('DBConnect.php');

if(isset($_POST['shop_id'])){

    $a = $_POST['shop_id'];


    $sql = "DELETE FROM gift_package WHERE shop_id='$a'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_gift_packages.php");

    }
    else{
        header("Location: add_delete_gift_packages.php");

    }

}


?>