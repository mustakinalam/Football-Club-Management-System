<?php
require_once('DBconnect.php');

if(isset($_POST['date']) && isset($_POST['injury_type']) && isset($_POST['return_date']) && isset($_POST['Jersey_No'])){

    $u = $_POST['date'];
    $p = $_POST['injury_type'];
    $a = $_POST['return_date'];
	$b = $_POST['Jersey_No'];

    $sql = " UPDATE injury SET date='$u',injury_type='$p',return_date='$a' WHERE Jersey_No='$b'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: injury.php");

    }
    else{
        header("Location: modify_injury.php");

    }

}


?>