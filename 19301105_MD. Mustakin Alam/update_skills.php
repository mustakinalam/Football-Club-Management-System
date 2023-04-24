<?php
require_once('DBconnect.php');

if(isset($_POST['skills']) && isset($_POST['Jersey_No'])){

    $u = $_POST['skills'];
    $p = $_POST['Jersey_No'];
    

    $sql = " UPDATE skills SET skills='$u' WHERE Jersey_No='$p'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){

        header("Location: all_players.php");

    }
    else{
        header("Location: modify_skills.php");

    }

}


?>