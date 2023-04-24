<?php
require_once('DBConnect.php');

if(isset($_POST['quantity']) && isset($_POST['price']) && isset($_POST['id']) && isset($_POST['shop_id']) && isset($_POST['selling_item'])){

    $u = $_POST['quantity'];
    $p = $_POST['price'];
	$s = $_POST['id'];
    $a = $_POST['shop_id'];
    $b = $_POST['selling_item'];

    $sql = "UPDATE club_shop SET quantity ='$u', price='$p', id='$s' WHERE shop_id='$a' AND selling_item='$b'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: show_club_shop.php");

    }
    else{
        header("Location: add_update_delete_club_shop.php");

    }

}


?>