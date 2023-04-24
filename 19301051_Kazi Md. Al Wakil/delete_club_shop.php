<?php
require_once('DBConnect.php');

if(isset($_POST['shop_id']) && isset($_POST['selling_item'])){

    $a = $_POST['shop_id'];
    $b = $_POST['selling_item'];

    $sql = "DELETE FROM club_shop WHERE shop_id='$a' AND selling_item='$b'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_club_shop.php");

    }
    else{
        header("Location: add_update_delete_club_shop.php");

    }

}


?>