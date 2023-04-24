<?php
require_once('DBconnect.php');

if(isset($_POST['First_Name']) && isset($_POST['Last_Name']) && isset($_POST['Age']) && isset($_POST['Jersey_No'])){

    $u = $_POST['First_Name'];
    $p = $_POST['Last_Name'];
    $a = $_POST['Age'];
	$b = $_POST['Jersey_No'];

    $sql = " UPDATE player SET First_Name='$u',Last_Name='$p',Age='$a' WHERE Jersey_No='$b'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: all_players.php");

    }
    else{
        header("Location: modify_players.php");

    }

}


?>