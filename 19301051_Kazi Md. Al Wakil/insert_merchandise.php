<?php
require_once('DBconnect.php');

if(isset($_POST['shop_id'])){

    $u = $_POST['shop_id'];


    $sql = " INSERT INTO merchandise VALUES( '$u' ) ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_merchandise.php");

    }
    else{
        header("Location: add_delete_merchandise.php");

    }

}


?>