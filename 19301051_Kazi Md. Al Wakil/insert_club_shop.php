<?php
require_once('DBconnect.php');

if(isset($_POST['shop_id']) && isset($_POST['selling_item']) && isset($_POST['quantity']) && isset($_POST['price']) && isset($_POST['id'])){

    $u = $_POST['shop_id'];
    $p = $_POST['selling_item'];
    $c = $_POST['quantity'];
	$d = $_POST['price'];
	$e = $_POST['id'];

    $sql = " INSERT INTO club_shop VALUES( '$u', '$p', '$c', '$d', '$e') ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_club_shop.php");

    }
    else{
        header("Location: add_update_delete_club_shop.php");

    }

}


?>